<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Frontend extends CI_Controller{

	
	public function profile(){
		$data=array(
            'headerTitle'=>'Profile',
            'formTitle'=>'Profile',

            'active_pengaturan'=>'active',
            'data_media'=>$this->Adminm->getAllData('tbl_media'),
            'data_berita'=>$this->Adminm->get_all_berita(),
        );
        $this->load->view('elements/header_frontend', $data);
		$this->load->view('pages/frontend/team_qrm', $data);
        $this->load->view('elements/footer_frontend');
		
	}


} 

