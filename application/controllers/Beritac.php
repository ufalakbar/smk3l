<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beritac extends CI_Controller {

    // function __construct(){
    //     parent::__construct();
    //     if($this->session->userdata('LEVEL') == '' ){
    //         $this->session->set_flashdata('notif','LOGIN GAGAL USERNAME ATAU PASSWORD ANDA SALAH !');
    //         redirect('');
    //     };
    // }

/*===========================================================================================================================================*/
/*===========================================================================================================================================*/

	public function data_berita()
	{
        $data=array(
            'headerTitle'=>'Data Berita',
            'formTitle'=>'Tabel Data Berita',

            'active_berita'=>'active',
            'data_berita'=>$this->Adminm->get_all_berita(),
        );		
		$this->load->view('elements/header', $data);
		$this->load->view('pages/berita/data_berita');
		$this->load->view('elements/footer');
	}

	public function manage_data_berita()
	{
        $id= $this->uri->segment(3);
		if ($id == '') {

	        $data=array(
	            'headerTitle'=>'Data Berita',
	            'formTitle'=>'Form Tambah Berita',

	            'active_berita'=>'active',            
	            'id'=>$this->Adminm->id_berita(),
	            'data_kategori_berita'=>$this->Adminm->getAllData('tbl_kategori_berita'),
	        );		
			$this->load->view('elements/header', $data);
			$this->load->view('pages/berita/manage_data_berita');
			$this->load->view('elements/footer');

		} else {
	        $id_berita = $this->uri->segment(3);
	        $data=array(
	            'headerTitle'=>'Data Berita',
	            'formTitle'=>'Form Ubah Berita',

	            'active_berita'=>'active',            
	            'data_berita'=>$this->Adminm->get_berita($id_berita),
	            'data_kategori_berita'=>$this->Adminm->getAllData('tbl_kategori_berita'),
	        );		
			$this->load->view('elements/header', $data);
			$this->load->view('pages/berita/manage_data_berita');
			$this->load->view('elements/footer');

		}
	}

    function proses_data_berita() {
        $key     = $this->input->post('id_berita');
    	if ($key != '') {

	        $config['upload_path'] = './uploads/img';
	        $config['allowed_types'] = 'jpg|png|gif|pdf|docs|docx|doc';
	        $config['max_size'] = '100000';

	        $this->load->library('upload', $config);
	        
	        if ( ! $this->upload->do_upload('cover_berita')) {
	            $this->session->set_flashdata('notif','File gagal di upload !');
	            redirect('beritac/manage_data_berita');
	        } else {
	            $cover_berita = $this->upload->data();
	            $data=array(
			        'id_berita'=>$this->input->post('id_berita'),
		            'id_kategori_berita'=>$this->input->post('id_kategori_berita'),
	                'cover_berita' => $cover_berita['file_name'],
		            'title_berita'=>$this->input->post('title_berita'),
		            'status_berita'=>$this->input->post('status_berita'),
		            'keyword_berita'=>$this->input->post('keyword_berita'),
		            'desk_berita'=>$this->input->post('desk_berita'),
		            'tgl_berita'=>date('Y-m-d'),
	            );
		        $this->Adminm->insertData('tbl_berita',$data);
	        }

    	} elseif ($key == '') {

	        $config['upload_path'] = './uploads/img';
	        $config['allowed_types'] = 'jpg|png|gif|pdf|docs|docx|doc';
	        $config['max_size'] = '100000';

	        $this->load->library('upload', $config);
	        
	        if ( ! $this->upload->do_upload('cover_berita')) {
		        $id['id_berita'] = $this->input->post('id');
		        $data=array(
		            'id_kategori_berita'=>$this->input->post('id_kategori_berita'),
		            'title_berita'=>$this->input->post('title_berita'),
		            'status_berita'=>$this->input->post('status_berita'),
		            'keyword_berita'=>$this->input->post('keyword_berita'),
		            'desk_berita'=>$this->input->post('desk_berita'),
		            'tgl_berita'=>date('Y-m-d'),
		        );
		        $this->Adminm->updateData('tbl_berita',$data,$id);
	        } else {
	            $cover_berita = $this->upload->data();
		        $id['id_berita'] = $this->input->post('id');
	            $data=array(
		            'id_kategori_berita'=>$this->input->post('id_kategori_berita'),
	                'cover_berita' => $cover_berita['file_name'],
		            'title_berita'=>$this->input->post('title_berita'),
		            'status_berita'=>$this->input->post('status_berita'),
		            'keyword_berita'=>$this->input->post('keyword_berita'),
		            'desk_berita'=>$this->input->post('desk_berita'),
		            'tgl_berita'=>date('Y-m-d'),
	            );
		        $this->Adminm->updateData('tbl_berita',$data,$id);
	        }

    	}
        redirect("beritac/data_berita");
    }

    function proses_hapus_berita(){
        $id['id_berita'] = $this->uri->segment(3);
        $this->Adminm->deleteData('tbl_berita',$id);

        redirect("beritac/data_berita");
    }

/*===========================================================================================================================================*/
/*===========================================================================================================================================*/

	public function kategori_berita()
	{
        $data=array(
            'headerTitle'=>'Data Kategori Berita',
            'formTitle'=>'Tabel Data Kategori Berita',

            'active_berita'=>'active',
            'data_kategori_berita'=>$this->Adminm->getAllData('tbl_kategori_berita'),
        );		
		$this->load->view('elements/header', $data);
		$this->load->view('pages/berita/kategori_berita');
		$this->load->view('elements/footer');
	}

	public function manage_data_kategori_berita()
	{
        $id= $this->uri->segment(3);
		if ($id == '') {

	        $data=array(
	            'headerTitle'=>'Data Kategori Berita',
	            'formTitle'=>'Form Tambah Kategori Berita',

	            'active_berita'=>'active',            
	            'id'=>$this->Adminm->id_kategori_berita(),

	        );		
			$this->load->view('elements/header', $data);
			$this->load->view('pages/berita/manage_data_kategori_berita');
			$this->load->view('elements/footer');

		} else {
	        $id_kategori_berita['id_kategori_berita']= $this->uri->segment(3);
	        $data=array(
	            'headerTitle'=>'Data Kategori Berita',
	            'formTitle'=>'Form Ubah Berita',

	            'active_berita'=>'active',            
	            'data_kategori_berita'=>$this->Adminm->getSelectedData('tbl_kategori_berita',$id_kategori_berita),
	        );		
			$this->load->view('elements/header', $data);
			$this->load->view('pages/berita/manage_data_kategori_berita');
			$this->load->view('elements/footer');

		}
	}

    function proses_data_kategori_berita() {
        $key     = $this->input->post('id_kategori_berita');
    	if ($key != '') {
	        $data=array(
		        'id_kategori_berita'=>$this->input->post('id_kategori_berita'),
	            'nm_kategori_berita'=>$this->input->post('nm_kategori_berita'),
	            'desk_kategori_berita'=>$this->input->post('desk_kategori_berita'),
	        );
	        $this->Adminm->insertData('tbl_kategori_berita',$data);


    	} elseif ($key == '' AND $pass == '') {

	        $id['id_kategori_berita'] = $this->input->post('id');
	        $data=array(
	            'nm_kategori_berita'=>$this->input->post('nm_kategori_berita'),
	            'desk_kategori_berita'=>$this->input->post('desk_kategori_berita'),
	        );
	        $this->Adminm->updateData('tbl_kategori_berita',$data,$id);

    	} 
        redirect("beritac/kategori_berita");
    }

    function proses_hapus_kategori_berita(){
        $id['id_kategori_berita'] = $this->uri->segment(3);
        $this->Adminm->deleteData('tbl_kategori_berita',$id);

        redirect("beritac/kategori_berita");
    }
}
