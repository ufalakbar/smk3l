<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginc extends CI_Controller {

	public function index()
	{
        if($this->session->userdata('LEVEL') == 'Admin' ){
            redirect('dashboardc');
        };

        $data=array(
        );		
		$this->load->view('pages/login',$data);
	}

/*===========================================================================================================================================*/
/*===========================================================================================================================================*/


    function proses_login() {

        $username = $this->input->post('username');
        $password = $this->input->post('password');
        //query the database
        $result = $this->Adminm->login($username, $password);
        if($result) {
            $sess_array = array();
            foreach($result as $row) {
                //create the session
                $sess_array = array(
                    'ID' => $row->id_user,
                    'USERNAME' => $row->username,
                    'PASS'=>$row->password,
                    'NAME'=>$row->nm_user,
                    'LEVEL' =>$row->level_user,
                    'login_status'=>true,
                );
                //set session with value from database
                $this->session->set_userdata($sess_array);

                if ($this->session->userdata('LEVEL') == 'Admin'){ 
                redirect('dashboardc','refresh');
                }else{
                    $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Anda bukan seorang Admin!</div>');
                    redirect('loginc');
                    return FALSE;
                } 

            }
            return TRUE;
        } else {
            //jika validasi salah
            $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Username atau password salah!</div>');
            redirect('loginc');
            return FALSE;
        }
    }
 
    function download_dokumen($file_dokumen, $id_kategori_dokumen) {

        $username = $this->input->post('username');
        $password = $this->input->post('password');
        //query the database
        $result = $this->Adminm->login($username, $password);
        if($result) {
            $nip = $this->Adminm->get_user_nip($username);
            $divisi = $this->Adminm->get_user_division($nip);
            $not_allowed = $this->Adminm->get_not_allowed_division($id_kategori_dokumen);
            if($not_allowed ==  $divisi){
               
                $this->session->set_flashdata('error','Divisi anda tidak memiliki izin untuk melihat dokumen');
                redirect('Dokumen/index/'.$id_kategori_dokumen);
                return FALSE;
            }
            else{
                redirect('uploads/berkas/'.$file_dokumen); 
            }           
        } else {
            //jika validasi salah
            $this->session->set_flashdata('error','Username atau Password salah');
            redirect('Dokumen/index/'.$id_kategori_dokumen);
            return FALSE;
        }
    }

    function download_laporan($file_laporan, $id_kategori_laporan) {

        $username = $this->input->post('username');
        $password = $this->input->post('password');
        //query the database
        $result = $this->Adminm->login($username, $password);
        if($result) {
            redirect('uploads/berkas/'.$file_laporan);            
        } else {
            //jika validasi salah
            $this->session->set_flashdata('error','Username atau Password salah');
            redirect('Laporan/index/'.$id_kategori_laporan);
            return FALSE;
        }
    }
    function download_buku($file_buku, $id_buku) {

        $username = $this->input->post('username');
        $password = $this->input->post('password');
        //query the database
        $result = $this->Adminm->login($username, $password);
        if($result) {
            redirect('uploads/berkas/'.$file_buku);            
        } else {
            //jika validasi salah
            $this->session->set_flashdata('error','Username atau Password salah');
            redirect('Buku/index/'.$id_buku);
            return FALSE;
        }
    }

    function logout() {
        $this->session->sess_destroy();
        redirect('loginc');
    }

}
