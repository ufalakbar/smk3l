<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {

    // function __construct(){
    //     parent::__construct();
    //     if($this->session->userdata('LEVEL') == '' ){
    //         $this->session->set_flashdata('notif','LOGIN GAGAL USERNAME ATAU PASSWORD ANDA SALAH !');
    //         redirect('');
    //     };
    // }

/*===========================================================================================================================================*/
/*===========================================================================================================================================*/

    public function index()
    {
        $data=array(
            'headerTitle'=>'Data Karyawan',
            'formTitle'=>'Tabel Data Karyawan',

            'active_user'=>'active',
            'data_karyawan'=>$this->Adminm->getAllData('tbl_karyawan'),
        );      
        $this->load->view('elements/header', $data);
        $this->load->view('pages/user/data_pengguna');
        $this->load->view('elements/footer');
    }

    public function manage_data_karyawan()
    {
        $id= $this->uri->segment(3);
        if ($id == '') {

            $data=array(
                'headerTitle'=>'Data karyawan',
                'formTitle'=>'Form Tambah Karyawan',

                'active_karyawan'=>'active',            
                'id'=>$this->Adminm->id_karyawan(),
            );      
            $this->load->view('elements/header', $data);
            $this->load->view('pages/user/manage_data_pengguna');
            $this->load->view('elements/footer');

        } else {
            $id_karyawan['nip'] = $this->uri->segment(3);
            $data=array(
                'headerTitle'=>'Data Karyawan',
                'formTitle'=>'Form Ubah Karyawan',

                'active_karyawan'=>'active',            
                'data_karyawan'=>$this->Adminm->getSelectedData('tbl_karyawan', $id_karyawan),
            );      
            $this->load->view('elements/header', $data);
            $this->load->view('pages/user/manage_data_pengguna');
            $this->load->view('elements/footer');

        }
    }

    function proses_data_karyawan() {
        $key     = $this->input->post('id_karyawan');
        if ($key != '') {
             $data=array(
                'id_karyawan'=>$this->input->post('id_karyawan'),
                'nm_karyawan'=>$this->input->post('nm_karyawan'),
                'nip'=>$this->input->post('nip'),
                'divisi'=>$this->input->post('divisi'),
                'email_karyawan'=>$this->input->post('email_karyawan'),
            );

             $nip_valid = $this->Adminm->validasi_nip($data['nip']);
             $cek_valid_name = preg_match("/^[a-zA-Z-' ]*$/", $data['nm_karyawan']);

            if(strlen((string)$data['nip'])<9){
                $this->session->set_flashdata('error', "NIP harus lebih dari 9 digit");
                redirect('karyawan/manage_data_karyawan');
            }
            if ( !$nip_valid) {
                $this->session->set_flashdata('error', "NIP sudah digunakan");
                redirect('karyawan/manage_data_karyawan');
            } 
            if(!$cek_valid_name){
                $this->session->set_flashdata('error','Gunakan Nama yang Valid!!');
                redirect("karyawan/manage_data_karyawan");
            }
            if(!filter_var($data['email_karyawan'], FILTER_VALIDATE_EMAIL)){
                $this->session->set_flashdata('error','Gunakan Nama yang Valid!!');
                redirect("karyawan/manage_data_karyawan");
            }

            $this->Adminm->insertData('tbl_karyawan',$data);

        } elseif ($key == '') {

             $id['id_karyawan'] = $this->input->post('id');
            $data=array(
                'nm_karyawan'=>$this->input->post('nm_karyawan'),
                'nip'=>$this->input->post('nip'),
                'divisi'=>$this->input->post('divisi'),
                'email_karyawan'=>$this->input->post('email_karyawan'),
            );
            $this->Adminm->updateData('tbl_karyawan',$data,$id);

        } 

        redirect("karyawan");
    }

    function proses_hapus_karyawan(){
        $id['nip'] = $this->uri->segment(3);
        $this->Adminm->deleteData('tbl_karyawan',$id);

        redirect("karyawan");
    }
}
