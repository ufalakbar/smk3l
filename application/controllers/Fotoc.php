<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fotoc extends CI_Controller {

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
            'headerTitle'=>'Data foto',
            'formTitle'=>'Tabel Data foto',

            'active_foto'=>'active',
            'data_foto'=>$this->Adminm->getAllData('tbl_foto'),
        );      
        $this->load->view('elements/header', $data);
        $this->load->view('pages/foto/data_foto');
        $this->load->view('elements/footer');
    }

    public function manage_data_foto()
    {
        $id= $this->uri->segment(3);
        if ($id == '') {

            $data=array(
                'headerTitle'=>'Data foto',
                'formTitle'=>'Form Tambah foto',

                'active_foto'=>'active',            
                'id'=>$this->Adminm->id_foto(),
            );      
            $this->load->view('elements/header', $data);
            $this->load->view('pages/foto/manage_data_foto');
            $this->load->view('elements/footer');

        } else {
            $id_foto['id_foto'] = $this->uri->segment(3);
            $data=array(
                'headerTitle'=>'Data foto',
                'formTitle'=>'Form Ubah foto',

                'active_foto'=>'active',            
                'data_foto'=>$this->Adminm->getSelectedData('tbl_foto', $id_foto),
            );      
            $this->load->view('elements/header', $data);
            $this->load->view('pages/foto/manage_data_foto');
            $this->load->view('elements/footer');

        }
    }

    function proses_data_foto() {
        $key     = $this->input->post('id_foto');
        if ($key != '') {

            $config['upload_path'] = './uploads/berkas';
            $config['allowed_types'] = 'jpg|png|gif|pdf|docs|docx|doc';
            $config['max_size'] = '0';

            $this->load->library('upload', $config);
            
            if ( ! $this->upload->do_upload('file_foto')) {
                $this->session->set_flashdata('error', $this->upload->display_errors());
                redirect('fotoc/manage_data_foto');
            } else {
                $file_foto = $this->upload->data();
                $data=array(
                    'id_foto'=>$this->input->post('id_foto'),
                    'file_foto' => $file_foto['file_name'],
                    'nm_foto'=>$this->input->post('nm_foto'),
                    'status_foto'=>$this->input->post('status_foto'),
                    'tgl_foto' => $this->input->post('tgl_foto'),
                );
                $this->Adminm->insertData('tbl_foto',$data);
                $this->session->set_flashdata('message','Data berhasil ditambah!');

            }

        } elseif ($key == '') {

            $config['upload_path'] = './uploads/berkas';
            $config['allowed_types'] = 'jpg|png|gif|pdf|docs|docx|doc';
            $config['max_size'] = '';

            $this->load->library('upload', $config);
            
            if ( ! $this->upload->do_upload('file_foto')) {
                $id['id_foto'] = $this->input->post('id');
                $data=array(
                    'nm_foto'=>$this->input->post('nm_foto'),
                    'status_foto'=>$this->input->post('status_foto'),
                    'tgl_foto' => $this->input->post('tgl_foto'),
                );
                $this->Adminm->updateData('tbl_foto',$data,$id);
                $this->session->set_flashdata('edit','Data berhasil diubah!');
            } else {
                $file_foto = $this->upload->data();
                $id['id_foto'] = $this->input->post('id');
                $data=array(
                    'id_foto'=>$this->input->post('id_foto'),
                    'file_foto' => $file_foto['file_name'],
                    'nm_foto'=>$this->input->post('nm_foto'),
                    'status_foto'=>$this->input->post('status_foto'),
                    'tgl_foto' => $this->input->post('tgl_foto'),
                );
                $this->Adminm->updateData('tbl_foto',$data,$id);
            }

        }
        redirect("fotoc");
    }

    function proses_hapus_foto(){
        $id['id_foto'] = $this->uri->segment(3);
        $this->Adminm->deleteData('tbl_foto',$id);
        $this->session->set_flashdata('hapus','Data berhasil dihapus!');

        redirect("fotoc");
    }
}
