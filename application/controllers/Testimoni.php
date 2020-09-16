<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimoni extends CI_Controller {
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

	public function index() {
        $data=array(
            'headerTitle'=>'Pengaturan',
            'formTitle'=>'Form Pengaturan',

            'active_pengaturan'=>'active',
            'data_testimoni'=>$this->Adminm->getAllData('tbl_testimoni'),
        );
        $this->load->view('elements/header_frontend', $data);
		$this->load->view('pages/frontend/testimoni', $data);
        $this->load->view('elements/footer_frontend');
	}

    function proses_input_testimoni() {
        $id_testimoni = $this->input->post('id_testimoni');
        $data=array(
            'id_testimoni'=>$this->Adminm->id_testimoni(),
            'user_testimoni'=>$this->input->post('user_testimoni'),
            'corp_testimoni'=>$this->input->post('corp_testimoni'),
            'isi_testimoni'=>$this->input->post('isi_testimoni'),
        );
        $this->Adminm->insertData('tbl_testimoni',$data);
        redirect("Testimoni");
    }
}
