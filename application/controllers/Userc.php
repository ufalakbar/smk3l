<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userc extends CI_Controller {

    function __construct(){
        parent::__construct();
        if($this->session->userdata('LEVEL') == '' ){
            $this->session->set_flashdata('notif','LOGIN GAGAL USERNAME ATAU PASSWORD ANDA SALAH !');
            redirect('');
        };
    }

/*===========================================================================================================================================*/
/*===========================================================================================================================================*/

	public function data_admin()
	{
        $id=array(
            'level_user'=>'Admin',
        );
        $data=array(
            'headerTitle'=>'Data Admin',
            'formTitle'=>'Tabel Data Admin',

            'active_user'=>'active',            
            'data_user'=>$this->Adminm->getSelectedData('tbl_user', $id),
        );		
		$this->load->view('elements/header', $data);
		$this->load->view('pages/user/data_admin');
		$this->load->view('elements/footer');
	}

	public function manage_data_admin()
	{
        $id= $this->uri->segment(3);
		if ($id == '') {

	        $data=array(
	            'headerTitle'=>'Data Admin',
	            'formTitle'=>'Form Tambah Admin',

	            'active_user'=>'active',            
	            'id'=>$this->Adminm->id_user(),

	        );		
			$this->load->view('elements/header', $data);
			$this->load->view('pages/user/manage_data_admin');
			$this->load->view('elements/footer');

		} else {
	        $id_user['id_user']= $this->uri->segment(3);
	        $data=array(
	            'headerTitle'=>'Data Admin',
	            'formTitle'=>'Form Ubah Admin',

	            'active_user'=>'active',            
	            'data_user'=>$this->Adminm->getSelectedData('tbl_user',$id_user),
	        );		
			$this->load->view('elements/header', $data);
			$this->load->view('pages/user/manage_data_admin');
			$this->load->view('elements/footer');

		}
	}

    function proses_data_admin() {
        $key     = $this->input->post('id_user');
        $pass    = $this->input->post('password');
    	if ($key != '') {

	        $username    = $this->input->post('username');
	        $cek_user = $this->Adminm->cek_user($username);

	        if ($cek_user == TRUE OR $cek_pegawai == TRUE) {
	            $this->session->set_flashdata('error','Data sudah digunakan');
		        redirect("userc/manage_data_user");
	        }

	        $data=array(
		        'id_user'=>$this->input->post('id_user'),
	            'nm_user'=>$this->input->post('nm_user'),
	            'username'=>$this->input->post('username'),
	            'password'=>md5($this->input->post('password')),
	            'level_user'=>'Admin',
	        );
	        $this->Adminm->insertData('tbl_user',$data);


    	} elseif ($key == '' AND $pass == '') {

	        $id['id_user'] = $this->input->post('id');
	        $data=array(
	            'nm_user'=>$this->input->post('nm_user'),
	            'username'=>$this->input->post('username'),
	        );
	        $this->Adminm->updateData('tbl_user',$data,$id);

    	} elseif ($key == '' AND $pass != '') {
	        $id['id_user'] = $this->input->post('id');
	        $data=array(
	            'nm_user'=>$this->input->post('nm_user'),
	            'username'=>$this->input->post('username'),
	            'password'=>md5($this->input->post('password')),
	        );
	        $this->Adminm->updateData('tbl_user',$data,$id);
    	}
        redirect("userc/data_admin");
    }

    function proses_hapus_admin(){
        $id['id_user'] = $this->uri->segment(3);
        $this->Adminm->deleteData('tbl_user',$id);

        redirect("userc/data_admin");
    }

/*===========================================================================================================================================*/
/*===========================================================================================================================================*/

	public function data_pengguna()
	{
        $id=array(
            'level_user'=>'Pengguna',
        );
        $data=array(
            'headerTitle'=>'Data Pengguna',
            'formTitle'=>'Tabel Data Pengguna',

            'active_user'=>'active',            
            'data_user'=>$this->Adminm->getSelectedData('tbl_user', $id),
        );		
		$this->load->view('elements/header', $data);
		$this->load->view('pages/user/data_pengguna');
		$this->load->view('elements/footer');
	}

	public function manage_data_pengguna()
	{
        $id= $this->uri->segment(3);
		if ($id == '') {

	        $data=array(
	            'headerTitle'=>'Data Pengguna',
	            'formTitle'=>'Form Tambah Pengguna',

	            'active_user'=>'active',            
	            'id'=>$this->Adminm->id_user(),

	        );		
			$this->load->view('elements/header', $data);
			$this->load->view('pages/user/manage_data_pengguna');
			$this->load->view('elements/footer');

		} else {
	        $id_user['id_user']= $this->uri->segment(3);
	        $data=array(
	            'headerTitle'=>'Data Pengguna',
	            'formTitle'=>'Form Ubah Pengguna',

	            'active_user'=>'active',            
	            'data_user'=>$this->Adminm->getSelectedData('tbl_user',$id_user),
	        );		
			$this->load->view('elements/header', $data);
			$this->load->view('pages/user/manage_data_pengguna');
			$this->load->view('elements/footer');

		}
	}

    function proses_data_pengguna() {
        $key     = $this->input->post('id_user');
        $pass    = $this->input->post('password');
    	if ($key != '') {

	        $username    = $this->input->post('username');
	        $cek_user = $this->Adminm->cek_user($username);

	        if ($cek_user == TRUE OR $cek_pegawai == TRUE) {
	            $this->session->set_flashdata('error','Data sudah digunakan');
		        redirect("userc/manage_data_user");
	        }

	        $data=array(
		        'id_user'=>$this->input->post('id_user'),
	            'nm_user'=>$this->input->post('nm_user'),
	            'username'=>$this->input->post('username'),
	            'password'=>md5($this->input->post('password')),
	            'level_user'=>'Pengguna',
	        );
	        $this->Adminm->insertData('tbl_user',$data);


    	} elseif ($key == '' AND $pass == '') {

	        $id['id_user'] = $this->input->post('id');
	        $data=array(
	            'nm_user'=>$this->input->post('nm_user'),
	            'username'=>$this->input->post('username'),
	        );
	        $this->Adminm->updateData('tbl_user',$data,$id);

    	} elseif ($key == '' AND $pass != '') {
	        $id['id_user'] = $this->input->post('id');
	        $data=array(
	            'nm_user'=>$this->input->post('nm_user'),
	            'username'=>$this->input->post('username'),
	            'password'=>md5($this->input->post('password')),
	        );
	        $this->Adminm->updateData('tbl_user',$data,$id);
    	}
        redirect("userc/data_pengguna");
    }

    function proses_hapus_pengguna(){
        $id['id_user'] = $this->uri->segment(3);
        $this->Adminm->deleteData('tbl_user',$id);

        redirect("userc/data_pengguna");
    }
}
