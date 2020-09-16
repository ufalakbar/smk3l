<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategoric extends CI_Controller {

    // function __construct(){
    //     parent::__construct();
    //     if($this->session->userdata('LEVEL') == '' ){
    //         $this->session->set_flashdata('notif','LOGIN GAGAL USERNAME ATAU PASSWORD ANDA SALAH !');
    //         redirect('');
    //     };
    // }

/*===========================================================================================================================================*/
/*===========================================================================================================================================*/

	public function index()
	{
        $data=array(
            'headerTitle'=>'Data kategori',
            'formTitle'=>'Tabel Data kategori',

            'active_kategori'=>'active',
            'data_kategori'=>$this->Adminm->getAllData('tbl_kategori'),
        );		
		$this->load->view('elements/header', $data);
		$this->load->view('pages/kategori/data_kategori');
		$this->load->view('elements/footer');
	}

	public function manage_data_kategori()
	{
        $id= $this->uri->segment(3);
		if ($id == '') {

	        $data=array(
	            'headerTitle'=>'Data kategori',
	            'formTitle'=>'Form Tambah kategori',

	            'active_kategori'=>'active',            
	            'id'=>$this->Adminm->id_kategori(),
	        );		
			$this->load->view('elements/header', $data);
			$this->load->view('pages/kategori/manage_data_kategori');
			$this->load->view('elements/footer');

		} else {
	        $id_kategori['id_kategori'] = $this->uri->segment(3);
	        $data=array(
	            'headerTitle'=>'Data kategori',
	            'formTitle'=>'Form Ubah kategori',

	            'active_kategori'=>'active',            
	            'data_kategori'=>$this->Adminm->getSelectedData('tbl_kategori', $id_kategori),
	        );		
			$this->load->view('elements/header', $data);
			$this->load->view('pages/kategori/manage_data_kategori');
			$this->load->view('elements/footer');

		}
	}

    function proses_data_kategori() {
        $key     = $this->input->post('id_kategori');
    	if ($key != '') {
            $data=array(
		        'id_kategori'=>$this->input->post('id_kategori'),
	            'nm_kategori'=>$this->input->post('nm_kategori'),
            );
	        $this->Adminm->insertData('tbl_kategori',$data);
    	} elseif ($key == '') {

	        $id['id_kategori'] = $this->input->post('id');
	        $data=array(
	            'nm_kategori'=>$this->input->post('nm_kategori'),
	        );
	        $this->Adminm->updateData('tbl_kategori',$data,$id);
    	}
        redirect("kategoric");
    }

    function proses_hapus_kategori(){
        $id['id_kategori'] = $this->uri->segment(3);
        $this->Adminm->deleteData('tbl_kategori',$id);

        redirect("kategoric");
    }
}
