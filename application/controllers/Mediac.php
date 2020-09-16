<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mediac extends CI_Controller {
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
            'headerTitle'=>'Data Media',
            'formTitle'=>'Tabel Data Media',

            'active_media'=>'active',
            'data_media'=>$this->Adminm->getAllData('tbl_media'),
        );      
        $this->load->view('elements/header', $data);
        $this->load->view('pages/media/data_media');
        $this->load->view('elements/footer');
    }

    public function manage_data_media()
    {
        $id= $this->uri->segment(3);
        if ($id == '') {

            $data=array(
                'headerTitle'=>'Data Media',
                'formTitle'=>'Form Tambah Media',

                'active_media'=>'active',            
                'id'=>$this->Adminm->id_media(),
            );      
            $this->load->view('elements/header', $data);
            $this->load->view('pages/media/manage_data_media');
            $this->load->view('elements/footer');

        } else {
            $id_media['id_media'] = $id;
            $data=array(
                'headerTitle'=>'Data Media',
                'formTitle'=>'Form Ubah Media',

                'active_media'=>'active',            
                'data_media'=>$this->Adminm->getSelectedData('tbl_media', $id_media),
            );      
            $this->load->view('elements/header', $data);
            $this->load->view('pages/media/manage_data_media');
            $this->load->view('elements/footer');

        }
    }

    function proses_data_media() {
        $key     = $this->input->post('id_media');
        if ($key != '') {

            $config['upload_path'] = './uploads/img';
            $config['allowed_types'] = 'jpg|png|gif|pdf|docs|docx|doc';
            $config['max_size'] = '100000';

            $this->load->library('upload', $config);
            
            if ( ! $this->upload->do_upload('file_media')) {
                $this->session->set_flashdata('notif','File gagal di upload !');
                redirect('Mediac/manage_data_media');
            } else {
                $file_media = $this->upload->data();
                $data=array(
                    'id_media'=>$this->input->post('id_media'),
                    'tempat_media'=>$this->input->post('tempat_media'),
                    'file_media' => $file_media['file_name'],
                    'status_media'=>$this->input->post('status_media'),
                    'keterangan_media'=>$this->input->post('keterangan_media'),
                );
                $this->Adminm->insertData('tbl_media',$data);
            }

        } elseif ($key == '') {

            $config['upload_path'] = './uploads/img';
            $config['allowed_types'] = 'jpg|png|gif|pdf|docs|docx|doc';
            $config['max_size'] = '100000';

            $this->load->library('upload', $config);
            
            if ( ! $this->upload->do_upload('file_media')) {
                $id['id_media'] = $this->input->post('id');
                $data=array(
                    'tempat_media'=>$this->input->post('tempat_media'),
                    'status_media'=>$this->input->post('status_media'),
                    'keterangan_media'=>$this->input->post('keterangan_media'),
                );
                $this->Adminm->updateData('tbl_media',$data,$id);
            } else {
                $file_media = $this->upload->data();
                $id['id_media'] = $this->input->post('id');
                $data=array(
                    'tempat_media'=>$this->input->post('tempat_media'),
                    'file_media' => $file_media['file_name'],
                    'status_media'=>$this->input->post('status_media'),
                    'keterangan_media'=>$this->input->post('keterangan_media'),
                );
                $this->Adminm->updateData('tbl_media',$data,$id);
            }

        }
        redirect("Mediac");
    }

    function proses_hapus_media(){
        $id['id_media'] = $this->uri->segment(3);
        $this->Adminm->deleteData('tbl_media',$id);

        redirect("Mediac");
    }
}
