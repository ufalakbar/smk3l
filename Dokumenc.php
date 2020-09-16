<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokumenc extends CI_Controller {

    // function __construct(){
    //     parent::__construct();
    //     if($this->session->userdata('LEVEL') == '' ){
    //         $this->session->set_flashdata('notif','LOGIN GAGAL USERNAME ATAU PASSWORD ANDA SALAH !');
    //         redirect('');
    //     };
    // }

/*===========================================================================================================================================*/
/*===========================================================================================================================================*/

	public function data_dokumen()
	{
        $data=array(
            'headerTitle'=>'Data Dokumen',
            'formTitle'=>'Tabel Data Dokumen',

            'active_dokumen'=>'active',
            'data_dokumen'=>$this->Adminm->get_all_dokumen(),
        );		
		$this->load->view('elements/header', $data);
		$this->load->view('pages/dokumen/data_dokumen');
		$this->load->view('elements/footer');
	}


	public function manage_data_dokumen()
	{
        $id= $this->uri->segment(3);
		if ($id == '') {

	        $data=array(
	            'headerTitle'=>'Data Dokumen',
	            'formTitle'=>'Form Tambah Dokumen',

	            'active_dokumen'=>'active',            
	            'id'=>$this->Adminm->id_dokumen(),
	            'data_kategori_dokumen'=>$this->Adminm->getAllData('tbl_kategori_dokumen'),
	        );		
			$this->load->view('elements/header', $data);
			$this->load->view('pages/dokumen/manage_data_dokumen');
			$this->load->view('elements/footer');

		} else {
	        $id_dokumen = $this->uri->segment(3);
	        $data=array(
	            'headerTitle'=>'Data Dokumen',
	            'formTitle'=>'Form Ubah Dokumen',

	            'active_dokumen'=>'active',            
	            'data_dokumen'=>$this->Adminm->get_dokumen($id_dokumen),
	            'data_kategori_dokumen'=>$this->Adminm->getAllData('tbl_kategori_dokumen'),
	        );		
			$this->load->view('elements/header', $data);
			$this->load->view('pages/dokumen/manage_data_dokumen');
			$this->load->view('elements/footer');

		}
	}

    function proses_data_dokumen() {
        $key     = $this->input->post('id_dokumen');
    	if ($key != '') {

	        $config['upload_path'] = './uploads/berkas';
	        $config['allowed_types'] = 'jpg|png|gif|pdf|docs|docx|doc';
	        $config['max_size'] = '100000';

	        $this->load->library('upload', $config);
	        
	        if ( ! $this->upload->do_upload('file_dokumen')) {
	            $this->session->set_flashdata('notif','File gagal di upload !');
	            redirect('dokumenc/manage_data_dokumen');
	        } else {
	            $file_dokumen = $this->upload->data();
	            $data=array(
			        'id_dokumen'=>$this->input->post('id_dokumen'),
		            'id_kategori_dokumen'=>$this->input->post('id_kategori_dokumen'),
	                'file_dokumen' => $file_dokumen['file_name'],
		            'no_dokumen'=>$this->input->post('no_dokumen'),
		            'nm_dokumen'=>$this->input->post('nm_dokumen'),
		            'status_dokumen'=>$this->input->post('status_dokumen'),
		            'tgl_sah_dokumen'=>$this->input->post('tgl_sah_dokumen'),
	            );
		        $this->Adminm->insertData('tbl_dokumen',$data);
	        }

    	} elseif ($key == '') {

	        $config['upload_path'] = './uploads/img';
	        $config['allowed_types'] = 'jpg|png|gif|pdf|docs|docx|doc';
	        $config['max_size'] = '100000';

	        $this->load->library('upload', $config);
	        
	        if ( ! $this->upload->do_upload('file_dokumen')) {
		        $id['id_dokumen'] = $this->input->post('id');
		        $data=array(
		            'nm_dokumen'=>$this->input->post('nm_dokumen'),
		            'no_dokumen'=>$this->input->post('no_dokumen'),
		            'status_dokumen'=>$this->input->post('status_dokumen'),
		            'tgl_sah_dokumen'=>$this->input->post('tgl_sah_dokumen'),
		        );
		        $this->Adminm->updateData('tbl_dokumen',$data,$id);
	        } else {
	            $file_dokumen = $this->upload->data();
		        $id['id_dokumen'] = $this->input->post('id');
	            $data=array(
			        'id_dokumen'=>$this->input->post('id_dokumen'),
	                'file_dokumen' => $file_dokumen['file_name'],
		            'no_dokumen'=>$this->input->post('id_dokumen').'s',
		            'nm_dokumen'=>$this->input->post('nm_dokumen'),
		            'status_dokumen'=>$this->input->post('status_dokumen'),
		            'tgl_sah_dokumen'=>$this->input->post('tgl_sah_dokumen'),
	            );
		        $this->Adminm->updateData('tbl_dokumen',$data,$id);
	        }

    	}
        redirect("dokumenc/data_dokumen");
    }

    function proses_hapus_dokumen(){
        $id['id_dokumen'] = $this->uri->segment(3);
        $this->Adminm->deleteData('tbl_dokumen',$id);

        redirect("dokumenc/data_dokumen");
    }

/*===========================================================================================================================================*/
/*===========================================================================================================================================*/

	public function kategori_dokumen()
	{
        $data=array(
            'headerTitle'=>'Data Kategori Dokumen',
            'formTitle'=>'Tabel Data Kategori Dokumen',

            'active_dokumen'=>'active',
            'data_kategori_dokumen'=>$this->Adminm->getAllData('tbl_kategori_dokumen'),
        );		
		$this->load->view('elements/header', $data);
		$this->load->view('pages/dokumen/kategori_dokumen');
		$this->load->view('elements/footer');
	}

	public function manage_data_kategori_dokumen()
	{
        $id= $this->uri->segment(3);
		if ($id == '') {

	        $data=array(
	            'headerTitle'=>'Data Kategori Dokumen',
	            'formTitle'=>'Form Tambah Dokumen',

	            'active_dokumen'=>'active',            
	            'data_kategori_dokumen'=>$this->Adminm->getAllData('tbl_kategori_dokumen'),
	            'id'=>$this->Adminm->id_kategori_dokumen(),

	        );		
			$this->load->view('elements/header', $data);
			$this->load->view('pages/dokumen/manage_data_kategori_dokumen');
			$this->load->view('elements/footer');

		} else {
	        $id_kategori_dokumen['id_kategori_dokumen']= $this->uri->segment(3);
	        $data=array(
	            'headerTitle'=>'Data Kategori Dokumen',
	            'formTitle'=>'Form Ubah Dokumen',

	            'active_dokumen'=>'active',            
	            'data_kategori_dokumen'=>$this->Adminm->getSelectedData('tbl_kategori_dokumen',$id_kategori_dokumen),
	        );		
			$this->load->view('elements/header', $data);
			$this->load->view('pages/dokumen/manage_data_kategori_dokumen');
			$this->load->view('elements/footer');

		}
	}

    function proses_data_kategori_dokumen() {
        $key     = $this->input->post('id_kategori_dokumen');
    	if ($key != '') {
    		$has_child = "No";
    		$parrent = $this->input->post('parrent');
    		$orders = cek_orders($parrent);

	        $data=array(
		        'id_kategori_dokumen'=>$this->input->post('id_kategori_dokumen'),
	            'nm_kategori_dokumen'=>$this->input->post('nm_kategori_dokumen'),
	            'desk_kategori_dokumen'=>$this->input->post('desk_kategori_dokumen'),
		        'has_child'=>$has_child,
		        'parrent'=>$parrent,
		        'orders'=>$orders,
	        );
	        $this->Adminm->insertData('tbl_kategori_dokumen',$data);


    	} elseif ($key == '') {

	        $id['id_kategori_dokumen'] = $this->input->post('id');
	        $data=array(
	            'nm_kategori_dokumen'=>$this->input->post('nm_kategori_dokumen'),
	            'desk_kategori_dokumen'=>$this->input->post('desk_kategori_dokumen'),
	        );
	        $this->Adminm->updateData('tbl_kategori_dokumen',$data,$id);

    	} 
        redirect("dokumenc/kategori_dokumen");
    }

    function proses_hapus_kategori_dokumen(){
        $id['id_kategori_dokumen'] = $this->uri->segment(3);
        $this->Adminm->deleteData('tbl_kategori_dokumen',$id);

        redirect("dokumenc/kategori_dokumen");
    }
}
