<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class buku extends CI_Controller {
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
        // echo base_url();
        // exit;
        $data=array(
            'headerTitle'=>'Pengaturan',
            'formTitle'=>'Form Pengaturan',
            'active_pengaturan'=>'active',    
            'data_buku'=>$this->Adminm->getAllData('tbl_buku'),        
            
        );
        $this->load->view('elements/header_frontend', $data);
        $this->load->view('pages/frontend/buku', $data);
        $this->load->view('elements/footer_frontend');
	}

}
