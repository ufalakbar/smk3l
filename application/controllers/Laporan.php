<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class laporan extends CI_Controller {
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

	public function index($id)
	{
        // echo base_url();
        // exit;
        $data=array(
            'headerTitle'=>'Pengaturan',
            'formTitle'=>'Form Pengaturan',
            'pageTitle'=>$this->Adminm->get_laporan($id),
            'active_pengaturan'=>'active',            
            'data_laporan'=>$this->Adminm->get_laporan_kategori($id),
        );
        $this->load->view('elements/header_frontend', $data);
		$this->load->view('pages/frontend/laporan', $data);
        $this->load->view('elements/footer_frontend');
	}

}
