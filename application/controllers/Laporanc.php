<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporanc extends CI_Controller {

    // function __construct(){
    //     parent::__construct();
    //     if($this->session->userdata('LEVEL') == '' ){
    //         $this->session->set_flashdata('notif','LOGIN GAGAL USERNAME ATAU PASSWORD ANDA SALAH !');
    //         redirect('');
    //     };
    // }

/*===========================================================================================================================================*/
/*===========================================================================================================================================*/

	public function data_laporan()
	{
        $data=array(
            'headerTitle'=>'Data Laporan',
            'formTitle'=>'Tabel Data Laporan',

            'active_laporan'=>'active',
            'data_laporan'=>$this->Adminm->get_all_laporan(),
        );		
		$this->load->view('elements/header', $data);
		$this->load->view('pages/laporan/data_laporan');
		$this->load->view('elements/footer');
	}

	public function manage_data_laporan()
	{
        $id= $this->uri->segment(3);
		if ($id == '') {

	        $data=array(
	            'headerTitle'=>'Data Laporan',
	            'formTitle'=>'Form Tambah Laporan',

	            'active_laporan'=>'active',            
	            'id'=>$this->Adminm->id_laporan(),
	            'data_kategori_laporan'=>$this->Adminm->getAllData('tbl_kategori_laporan'),
	        );		
			$this->load->view('elements/header', $data);
			$this->load->view('pages/laporan/manage_data_laporan');
			$this->load->view('elements/footer');

		} else {
	        $id_laporan = $this->uri->segment(3);
	        $data=array(
	            'headerTitle'=>'Data Laporan',
	            'formTitle'=>'Form Ubah Laporan',

	            'active_laporan'=>'active',            
	            'data_laporan'=>$this->Adminm->get_laporan($id_laporan),
	            'data_kategori_laporan'=>$this->Adminm->getAllData('tbl_kategori_laporan'),
	        );		
			$this->load->view('elements/header', $data);
			$this->load->view('pages/laporan/manage_data_laporan');
			$this->load->view('elements/footer');

		}
	}

    function proses_data_laporan() {
        $key     = $this->input->post('id_laporan');
    	if ($key != '') {

	        $config['upload_path'] = './uploads/berkas';
	        $config['allowed_types'] = 'jpg|png|gif|pdf|docs|docx|doc';
	        $config['max_size'] = '1000000';

	        $this->load->library('upload', $config);
	        
	        if ( ! $this->upload->do_upload('file_laporan')) {
	            $this->session->set_flashdata('notif','File gagal di upload !');
	            redirect('laporanc/manage_data_laporan');
	        } else {
	            $file_laporan = $this->upload->data();
	            $data=array(
			        'id_laporan'=>$this->input->post('id_laporan'),
		            'id_kategori_laporan'=>$this->input->post('id_kategori_laporan'),
	                'file_laporan' => $file_laporan['file_name'],
		            'no_laporan'=>$this->input->post('no_laporan'),
		            'nm_laporan'=>$this->input->post('nm_laporan'),
		            'status_laporan'=>$this->input->post('status_laporan'),
		            'tgl_sah_laporan'=>$this->input->post('tgl_sah_laporan'),
		            'tgl_kadaluarsa'=>$this->input->post('tgl_kadaluarsa'),
	            );
		        $this->Adminm->insertData('tbl_laporan',$data);
	        }

    	} elseif ($key == '') {

	        $config['upload_path'] = './uploads/img';
	        $config['allowed_types'] = 'jpg|png|gif|pdf|docs|docx|doc';
	        $config['max_size'] = '100000';

	        $this->load->library('upload', $config);
	        
	        if ( ! $this->upload->do_upload('file_laporan')) {
		        $id['id_laporan'] = $this->input->post('id');
		        $data=array(
		            'nm_laporan'=>$this->input->post('nm_laporan'),
		            'no_laporan'=>$this->input->post('no_laporan'),
		            'status_laporan'=>$this->input->post('status_laporan'),
		            'tgl_sah_laporan'=>$this->input->post('tgl_sah_laporan'),
		            'tgl_kadaluarsa'=>$this->input->post('tgl_kadaluarsa'),
		        );
		        $this->Adminm->updateData('tbl_laporan',$data,$id);
	        } else {
	            $file_laporan = $this->upload->data();
		        $id['id_laporan'] = $this->input->post('id');
	            $data=array(
			        'id_laporan'=>$this->input->post('id_laporan'),
	                'file_laporan' => $file_laporan['file_name'],
		            'no_laporan'=>$this->input->post('id_laporan').'s',
		            'nm_laporan'=>$this->input->post('nm_laporan'),
		            'status_laporan'=>$this->input->post('status_laporan'),
		            'tgl_sah_laporan'=>$this->input->post('tgl_sah_laporan'),
		            'tgl_kadaluarsa'=>$this->input->post('tgl_kadaluarsa'),
	            );
		        $this->Adminm->updateData('tbl_laporan',$data,$id);
	        }

    	}
        redirect("laporanc/data_laporan");
    }

    function proses_hapus_laporan(){
        $id['id_laporan'] = $this->uri->segment(3);
        $this->Adminm->deleteData('tbl_laporan',$id);

        redirect("laporanc/data_laporan");
    }

/*===========================================================================================================================================*/
/*===========================================================================================================================================*/

	public function kategori_laporan()
	{
        $data=array(
            'headerTitle'=>'Data Kategori Laporan',
            'formTitle'=>'Tabel Data Kategori Laporan',

            'active_laporan'=>'active',
            'data_kategori_laporan'=>$this->Adminm->getAllData('tbl_kategori_laporan'),
        );		
		$this->load->view('elements/header', $data);
		$this->load->view('pages/laporan/kategori_laporan');
		$this->load->view('elements/footer');
	}

	public function manage_data_kategori_laporan()
	{
        $id= $this->uri->segment(3);
		if ($id == '') {

	        $data=array(
	            'headerTitle'=>'Data Kategori Laporan',
	            'formTitle'=>'Form Tambah Kategori Laporan',

	            'active_laporan'=>'active',            
	            'data_kategori_laporan'=>$this->Adminm->getAllData('tbl_kategori_laporan'),
	            'id'=>$this->Adminm->id_kategori_laporan(),

	        );		
			$this->load->view('elements/header', $data);
			$this->load->view('pages/laporan/manage_data_kategori_laporan');
			$this->load->view('elements/footer');

		} else {
	        $id_kategori_laporan['id_kategori_laporan']= $this->uri->segment(3);
	        $data=array(
	            'headerTitle'=>'Data Kategori Laporan',
	            'formTitle'=>'Form Ubah Kategori Laporan',

	            'active_laporan'=>'active',            
	            'data_kategori_laporan'=>$this->Adminm->getSelectedData('tbl_kategori_laporan',$id_kategori_laporan),
	        );		
			$this->load->view('elements/header', $data);
			$this->load->view('pages/laporan/manage_data_kategori_laporan');
			$this->load->view('elements/footer');

		}
	}

    function proses_data_kategori_laporan() {
        $key     = $this->input->post('id_kategori_laporan');
    	if ($key != '') {
    		$has_child = "No";

	        $data=array(
		        'id_kategori_laporan'=>$this->input->post('id_kategori_laporan'),
	            'nm_kategori_laporan'=>$this->input->post('nm_kategori_laporan'),
	            'desk_kategori_laporan'=>$this->input->post('desk_kategori_laporan'),
		        'has_child'=>$has_child,
	        );
	        $this->Adminm->insertData('tbl_kategori_laporan',$data);


    	} elseif ($key == '') {

	        $id['id_kategori_laporan'] = $this->input->post('id');
	        $data=array(
	            'nm_kategori_laporan'=>$this->input->post('nm_kategori_laporan'),
	            'desk_kategori_laporan'=>$this->input->post('desk_kategori_laporan'),
	        );
	        $this->Adminm->updateData('tbl_kategori_laporan',$data,$id);

    	} 
        redirect("laporanc/kategori_laporan");
    }

    function proses_hapus_kategori_laporan(){
        $id['id_kategori_laporan'] = $this->uri->segment(3);
        $this->Adminm->deleteData('tbl_kategori_laporan',$id);

        redirect("laporanc/kategori_laporan");
    }
}
