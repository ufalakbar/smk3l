<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class inti extends CI_Controller {
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
            'headerTitle'=>'Inti',
            'formTitle'=>'Inti',

            'active_pengaturan'=>'active',
        );
        $this->load->view('elements/header_frontend', $data);
		$this->load->view('pages/frontend/inti', $data);
        $this->load->view('elements/footer_frontend');
	}

}
