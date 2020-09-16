<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {
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
            'headerTitle'=>'Pengaturan',
            'formTitle'=>'Form Pengaturan',

            'active_pengaturan'=>'active',            
            'data_berita'=>$this->Adminm->get_all_berita(),
            'data_kategori'=>$this->Adminm->getAllData('tbl_kategori_berita'),
        );
        $this->load->view('elements/header_frontend', $data);
		$this->load->view('pages/frontend/berita', $data);
        $this->load->view('elements/footer_frontend');
	}

    public function kategori($id_kategori_berita)
    {
        $data=array(
            'headerTitle'=>'Pengaturan',
            'formTitle'=>'Form Pengaturan',

            'active_pengaturan'=>'active',            
            'data_berita'=>$this->Adminm->get_kategori_berita($id_kategori_berita),
            'data_kategori'=>$this->Adminm->getAllData('tbl_kategori_berita'),
        );
        $this->load->view('elements/header_frontend', $data);
        $this->load->view('pages/frontend/berita', $data);
        $this->load->view('elements/footer_frontend');
    }

    public function detail_berita($id_berita)
    {
        $id['id_berita'] = $id_berita;
        $data=array(
            'headerTitle'=>'Pengaturan',
            'formTitle'=>'Form Pengaturan',

            'active_pengaturan'=>'active',            
            'data_berita'=>$this->Adminm->get_berita($id_berita),
            'data_komentar_berita'=>$this->Adminm->getSelectedData('tbl_komentar_berita', $id),
            'data_kategori'=>$this->Adminm->getAllData('tbl_kategori_berita'),
        );
        $this->load->view('elements/header_frontend', $data);
        $this->load->view('pages/frontend/detail_berita', $data);
        $this->load->view('elements/footer_frontend');
    }

    function proses_input_berita() {
        $id_berita = $this->input->post('id_berita');
        $data=array(
            'id_komentar_berita'=>$this->Adminm->id_komentar_berita(),
            'id_berita'=>$id_berita,
            'user_komentar_berita'=>$this->input->post('user_komentar_berita'),
            'email_komentar_berita'=>$this->input->post('email_komentar_berita'),
            'isi_komentar_berita'=>$this->input->post('isi_komentar_berita'),
            'tgl_komentar_berita'=>date('Y-m-d'),
        );
        $this->Adminm->insertData('tbl_komentar_berita',$data);
            
        redirect("Berita/detail_berita/".$id_berita);
    }


}
