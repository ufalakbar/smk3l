<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboardc extends CI_Controller {
    function __construct(){
        parent::__construct();
        if($this->session->userdata('LEVEL') == '' ){
            $this->session->set_flashdata('notif','LOGIN GAGAL USERNAME ATAU PASSWORD ANDA SALAH !');
            redirect('');
        };
    }
    
	public function index()
	{

        $data=array(
            'headerTitle'=>'Home',
            'formTitle'=>'Halaman Home',

            'active_dashboard'=>'active',

        );
        $this->load->view('elements/header', $data);
        $this->load->view('pages/dashboard');
        $this->load->view('elements/footer');
	}


}
