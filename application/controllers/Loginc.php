<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginc extends CI_Controller {

	public function index()
	{
        if($this->session->userdata('LEVEL') != '' ){
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
                    'LEVEL' => 'Admin',
                    'login_status'=>true,
                );
                //set session with value from database
                $this->session->set_userdata($sess_array);

                if ($this->session->userdata('LEVEL') != ''){ 
                redirect('dashboardc','refresh');
                } 

            }
            return TRUE;
        } else {
            //jika validasi salah
            $this->session->set_flashdata('notif','Username atau Password salah');
            redirect('loginc','refresh');
            return FALSE;
        }
    }

    function download_dokumen($file_dokumen, $id_kategori_dokumen) {

        $username = $this->input->post('username');
        $password = $this->input->post('password');
        //query the database
        $result = $this->Adminm->login($username, $password);
        if($result) {
            redirect('uploads/berkas/'.$file_dokumen);            
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
