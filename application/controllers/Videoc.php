<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Videoc extends CI_Controller {

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
            'headerTitle'=>'Data Video',
            'formTitle'=>'Tabel Data Video',

            'active_video'=>'active',
            'data_video'=>$this->Adminm->getAllData('tbl_video'),
        );		
		$this->load->view('elements/header', $data);
		$this->load->view('pages/video/data_video');
		$this->load->view('elements/footer');
	}

	public function manage_data_video()
	{
        $id= $this->uri->segment(3);
		if ($id == '') {

	        $data=array(
	            'headerTitle'=>'Data Video',
	            'formTitle'=>'Form Tambah Video',

	            'active_video'=>'active',            
	            'id'=>$this->Adminm->id_video(),
	        );		
			$this->load->view('elements/header', $data);
			$this->load->view('pages/video/manage_data_video');
			$this->load->view('elements/footer');

		} else {
	        $id_video['id_video'] = $this->uri->segment(3);
	        $data=array(
	            'headerTitle'=>'Data Video',
	            'formTitle'=>'Form Ubah Video',

	            'active_video'=>'active',            
	            'data_video'=>$this->Adminm->getSelectedData('tbl_video', $id_video),
	        );		
			$this->load->view('elements/header', $data);
			$this->load->view('pages/video/manage_data_video');
			$this->load->view('elements/footer');

		}
	}

    function proses_data_video() {
        $key     = $this->input->post('id_video');
    	if ($key != '') {

	        $config['upload_path'] = './uploads/berkas';
	        $config['allowed_types'] = 'swf|rm|asf|wmv|mov|avi|flv|3gp|3GP|mp4|mkv';
	        $config['max_size'] = '100000000000';

	        $this->load->library('upload', $config);
	        
	        if ( ! $this->upload->do_upload('file_video')) {
				$this->session->set_flashdata('error', $this->upload->display_errors());
	            redirect('videoc/manage_data_video');
	        } else {
	            $file_video = $this->upload->data();
	            $data=array(
			        'id_video'=>$this->input->post('id_video'),
	                'file_video' => $file_video['file_name'],
		            'nm_video'=>$this->input->post('nm_video'),
		            'status_video'=>$this->input->post('status_video'),
	            );
		        $this->Adminm->insertData('tbl_video',$data);
	        }

    	} elseif ($key == '') {

	        $config['upload_path'] = './uploads/berkas';
	        $config['allowed_types'] = 'jpg|png|gif|pdf|docs|docx|doc';
	        $config['max_size'] = '100000';

	        $this->load->library('upload', $config);
	        
	        if ( ! $this->upload->do_upload('file_video')) {
		        $id['id_video'] = $this->input->post('id');
		        $data=array(
		            'nm_video'=>$this->input->post('nm_video'),
		            'status_video'=>$this->input->post('status_video'),
		        );
		        $this->Adminm->updateData('tbl_video',$data,$id);
	        } else {
	            $file_video = $this->upload->data();
		        $id['id_video'] = $this->input->post('id');
	            $data=array(
			        'id_video'=>$this->input->post('id_video'),
	                'file_video' => $file_video['file_name'],
		            'nm_video'=>$this->input->post('nm_video'),
		            'status_video'=>$this->input->post('status_video'),
	            );
		        $this->Adminm->updateData('tbl_video',$data,$id);
	        }

    	}
        redirect("videoc");
    }

    function proses_hapus_video(){
        $id['id_video'] = $this->uri->segment(3);
        $this->Adminm->deleteData('tbl_video',$id);

        redirect("videoc");
    }
}
