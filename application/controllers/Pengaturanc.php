<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaturanc extends CI_Controller {
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

	public function umum()
	{
        $id_config['config_id']= 1;
        $data=array(
            'headerTitle'=>'Pengaturan',
            'formTitle'=>'Form Pengaturan',

            'active_pengaturan'=>'active',            
            'data_config'=>$this->Adminm->getSelectedData('tbl_config',$id_config),
        );
		$this->load->view('elements/header', $data);
		$this->load->view('pages/pengaturan/umum');
		$this->load->view('elements/footer');
	}

    function proses_data_umum() {
        $id['config_id'] = 1;
        $data=array(
            'nameweb'=>$this->input->post('nameweb'),
            'email'=>$this->input->post('email'),
            'phone_number'=>$this->input->post('phone_number'),
            'fax'=>$this->input->post('fax'),
            'keywords'=>$this->input->post('keywords'),
            'metatext'=>$this->input->post('metatext'),
            'about'=>$this->input->post('about'),
            'narasi_qrm'=>$this->input->post('narasi_qrm'),
        );
        $this->Adminm->updateData('tbl_config',$data,$id);
        redirect("pengaturanc/umum");
    }
/*===========================================================================================================================================*/
/*===========================================================================================================================================*/
    public function logo()
    {
        $id_config['config_id']= 1;
        $data=array(
            'headerTitle'=>'Pengaturan',
            'formTitle'=>'Form Pengaturan',

            'active_pengaturan'=>'active',            
            'data_config'=>$this->Adminm->getSelectedData('tbl_config',$id_config),
        );
        $this->load->view('elements/header', $data);
        $this->load->view('pages/pengaturan/logo');
        $this->load->view('elements/footer');
    }

    function proses_data_logo() {
        $id['config_id'] = 1;

        $config['upload_path'] = './uploads/img';
        $config['allowed_types'] = 'jpg|png|gif|pdf|docs|docx|doc';
        $config['max_size'] = '100000';

        $this->load->library('upload', $config);
        
        if ( ! $this->upload->do_upload('logo')) {
            $this->session->set_flashdata('notif','File gagal di upload !');
            redirect('pengaturanc/logo');
        } else {
            $logo = $this->upload->data();
            $id['config_id'] = 1;
            $data=array(
                'logo' => $logo['file_name']
            );
            $this->Adminm->updateData('tbl_config',$data,$id);
        }
        $this->session->set_flashdata('notif','Data berhasil di ubah');

        redirect("pengaturanc/logo");
    }

/*===========================================================================================================================================*/
/*===========================================================================================================================================*/
    public function icon()
    {
        $id_config['config_id']= 1;
        $data=array(
            'headerTitle'=>'Pengaturan',
            'formTitle'=>'Form Pengaturan',

            'active_pengaturan'=>'active',            
            'data_config'=>$this->Adminm->getSelectedData('tbl_config',$id_config),
        );
        $this->load->view('elements/header', $data);
        $this->load->view('pages/pengaturan/icon');
        $this->load->view('elements/footer');
    }

    function proses_data_icon() {
        $id['config_id'] = 1;
        
        $config['upload_path'] = './uploads/img';
        $config['allowed_types'] = 'jpg|png|gif|pdf|docs|docx|doc';
        $config['max_size'] = '100000';

        $this->load->library('upload', $config);
        
        if ( ! $this->upload->do_upload('icon')) {
            $this->session->set_flashdata('notif','File gagal di upload !');
            redirect('pengaturanc/icon');
        } else {
            $icon = $this->upload->data();
            $id['config_id'] = 1;
            $data=array(
                'icon' => $icon['file_name']
            );
            $this->Adminm->updateData('tbl_config',$data,$id);
        }
        $this->session->set_flashdata('notif','Data berhasil di ubah');

        redirect("pengaturanc/icon");
    }

/*===========================================================================================================================================*/
/*===========================================================================================================================================*/

    public function lokasi()
    {
        $id_config['config_id']= 1;
        $data=array(
            'headerTitle'=>'Pengaturan',
            'formTitle'=>'Form Pengaturan',

            'active_pengaturan'=>'active',            
            'data_config'=>$this->Adminm->getSelectedData('tbl_config',$id_config),
        );
        $this->load->view('elements/header', $data);
        $this->load->view('pages/pengaturan/lokasi');
        $this->load->view('elements/footer');
    }

    function proses_data_lokasi() {
        $id['config_id'] = 1;
        $data=array(
            'google_maps'=>$this->input->post('google_maps'),
        );
        $this->Adminm->updateData('tbl_config',$data,$id);
        redirect("pengaturanc/lokasi");
    }

/*===========================================================================================================================================*/
/*===========================================================================================================================================*/

    public function social_media()
    {
        $id_config['config_id']= 1;
        $data=array(
            'headerTitle'=>'Pengaturan',
            'formTitle'=>'Form Pengaturan',

            'active_pengaturan'=>'active',            
            'data_config'=>$this->Adminm->getSelectedData('tbl_config',$id_config),
        );
        $this->load->view('elements/header', $data);
        $this->load->view('pages/pengaturan/social_media');
        $this->load->view('elements/footer');
    }

    function proses_data_social_media() {
        $id['config_id'] = 1;
        $data=array(
            'facebook'=>$this->input->post('facebook'),
            'twitter'=>$this->input->post('twitter'),
            'instagram'=>$this->input->post('instagram'),
            'google_plus'=>$this->input->post('google_plus'),
            'youtube'=>$this->input->post('youtube'),
        );
        $this->Adminm->updateData('tbl_config',$data,$id);
        redirect("pengaturanc/social_media");
    }
}
