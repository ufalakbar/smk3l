<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
/*
    function __construct(){
        parent::__construct();
        if($this->session->userdata('LEVEL') == '' ){
            $this->session->set_flashdata('notif','LOGIN GAGAL USERNAME ATAU PASSWORD ANDA SALAH !');
            redirect('');
        };
    }
*/
/*===========================================================================================================================================*/
/*===========================================================================================================================================*/

	public function index()
	{
        $data=array(
            'headerTitle'=>'Profile',
            'formTitle'=>'Profile',

            'active_pengaturan'=>'active',
            'data_media'=>$this->Adminm->getAllData('tbl_media'),
            'data_berita'=>$this->Adminm->get_all_berita(),
        );
        $this->load->view('elements/header_frontend', $data);
		$this->load->view('pages/frontend/profile', $data);
        $this->load->view('elements/footer_frontend');
	}

}
