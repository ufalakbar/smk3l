<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bukuc extends CI_Controller {

    // function __construct(){
    //     parent::__construct();
    //     if($this->session->userdata('LEVEL') == '' ){
    //         $this->session->set_flashdata('notif','LOGIN GAGAL USERNAME ATAU PASSWORD ANDA SALAH !');
    //         redirect('');
    //     };
    // }

/*===========================================================================================================================================*/
/*===========================================================================================================================================*/

	public function data_buku()
	{
        $data=array(
            'headerTitle'=>'Data Buku Panduan',
            'formTitle'=>'Tabel Data Buku Panduan',

            'active_buku'=>'active',
            'data_buku'=>$this->Adminm->getAllData('tbl_buku'),
        );		
		$this->load->view('elements/header', $data);
		$this->load->view('pages/buku/data_buku');
		$this->load->view('elements/footer');
	}

	public function manage_data_buku()
	{
        $id= $this->uri->segment(3);
		if ($id == '') {

	        $data=array(
	            'headerTitle'=>'Data data buku',
	            'formTitle'=>'Form Tambah buku',


	            'active_buku'=>'active',            
	            'data_buku'=>$this->Adminm->getAllData('tbl_buku'),
	            'id'=>$this->Adminm->id_buku(),

	        );		
			$this->load->view('elements/header', $data);
			$this->load->view('pages/buku/manage_data_buku');
			$this->load->view('elements/footer');

		} else {
	        $id_buku['id_buku']= $this->uri->segment(3);
	        $data=array(
	            'headerTitle'=>'Data data buku',
	            'formTitle'=>'Form Ubah buku',

	            'active_buku'=>'active',            
	            'data_buku'=>$this->Adminm->getSelectedData('tbl_buku',$id_buku),
	        );		
			$this->load->view('elements/header', $data);
			$this->load->view('pages/buku/manage_data_buku');
			$this->load->view('elements/footer');

		}
	}

    function proses_data_buku() {
        $key     = $this->input->post('id_buku');
    	if ($key != '') {
    		$has_child = "No";

	        $data=array(
		        'id_buku'=>$this->input->post('id_buku'),
	            'judul_buku'=>$this->input->post('judul_buku'),
	            'tahun'=>$this->input->post('tahun'),
	            'penerbit'=>$this->input->post('penerbit'),
	            'status_buku'=>$this->input->post('status_buku'),
		        
	        );
	        $this->Adminm->insertData('tbl_buku',$data);


    	} elseif ($key == '') {

	        $id['id_buku'] = $this->input->post('id');
	        $data=array(
	            'judul_buku'=>$this->input->post('judul_buku'),
	            'tahun'=>$this->input->post('tahun'),
	            'penerbit'=>$this->input->post('penerbit'),
	            'status_buku'=>$this->input->post('status_buku'),
	        );
	        $this->Adminm->updateData('tbl_buku',$data,$id);

    	} 
        redirect("bukuc/data_buku");
    }

    function proses_hapus_buku(){
        $id['id_buku'] = $this->uri->segment(3);
        $this->Adminm->deleteData('tbl_buku',$id);

        redirect("bukuc/data_buku");
    }
}
