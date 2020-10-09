<?php

class Adminm extends CI_Model{                       

	//Fungsi untuk mengambil semua data pada suatu tabel
    public function getAllData($table)
    {
        return $this->db->get($table)->result();
    }
    //Fungsi untuk mengambil data tertentu pada suatu tabel
    public function getSelectedData($table,$data)
    {
        return $this->db->get_where($table, $data)->result();
    }
    public function insertData($table,$data)
    {
        $this->db->insert($table,$data);
    }
    function updateData($table,$data,$field_key)
    {
        $this->db->update($table,$data,$field_key);
    }
    function deleteData($table,$data)
    {
        $this->db->delete($table,$data);
    }  
     
	//Fungsi untuk menampilkan id user Auto Increment saat proses insert (otomatis)
    public function id_user()
    {
        $user = $this->db->query("select MAX(RIGHT(id_user,4)) as id_max from tbl_user");
        $id = "";
        //Jika data sudah ada
        if($user->num_rows()>0)
        {
            foreach($user->result() as $k)
            {
                $tmp = ((int)$k->id_max)+1;
                $id = sprintf("%04s", $tmp);
            }
        }
        //jika data masih kosong
        else
        {
            $id = "0001";
        }
        return "US-".$id;
    }

    //Fungsi untuk menampilkan id berita Auto Increment saat proses insert (otomatis)
    public function id_berita()
    {
        $q = $this->db->query("select MAX(RIGHT(id_berita,4)) as id_max from tbl_berita");
        $id = "";
        //jika data sudah ada
        if($q->num_rows()>0)
        {
            foreach($q->result() as $k)
            {
                $tmp = ((int)$k->id_max)+1;
                $id = sprintf("%04s", $tmp);
            }
        }
        //jika data masih kosong
        else
        {
            $id = "0001";
        }
        return "BR-".$id;
    }

    //Fungsi untuk menampilkan semua berita
    function get_all_berita(){
        return $this->db->query("
            SELECT *
            FROM tbl_berita a
            JOIN tbl_kategori_berita b ON a.id_kategori_berita = b.id_kategori_berita
        ")->result();
    }

    //Fungsi untuk menampilkan berita yang dipilih
    function get_berita($id_berita){
        return $this->db->query("
            SELECT *
            FROM tbl_berita a
            JOIN tbl_kategori_berita b ON a.id_kategori_berita = b.id_kategori_berita
            WHERE a.id_berita = '$id_berita'
        ")->result();
    }

    //Fungsi untuk menampilkan semua berita sesuai kategori yang dipilih
    function get_kategori_berita($id_kategori_berita){
        return $this->db->query("
            SELECT *
            FROM tbl_berita a
            JOIN tbl_kategori_berita b ON a.id_kategori_berita = b.id_kategori_berita
            WHERE a.id_kategori_berita = '$id_kategori_berita'
        ")->result();
    }

    //Fungsi untuk menampilkan id kategori berita Auto increment saat proses insert
    public function id_kategori_berita()
    {
        $q = $this->db->query("select MAX(RIGHT(id_kategori_berita,4)) as id_max from tbl_kategori_berita");
        $id = "";
        if($q->num_rows()>0)
        {
            foreach($q->result() as $k)
            {
                $tmp = ((int)$k->id_max)+1;
                $id = sprintf("%04s", $tmp);
            }
        }
        else
        {
            $id = "0001";
        }
        return "KB-".$id;
    }

    //Fungsi untuk menampilkan id dpkumen Auto increment saat proses insert
    public function id_dokumen()
    {
        $q = $this->db->query("select MAX(RIGHT(id_dokumen,4)) as id_max from tbl_dokumen");
        $id = "";
        if($q->num_rows()>0)
        {
            foreach($q->result() as $k)
            {
                $tmp = ((int)$k->id_max)+1;
                $id = sprintf("%04s", $tmp);
            }
        }
        else
        {
            $id = "0001";
        }
        return "DK-".$id;
    }

    //Fungsi untuk menampilkan semua data dokumen
    function get_all_dokumen(){
        return $this->db->query("
            SELECT *
            FROM tbl_dokumen a
            JOIN tbl_kategori_dokumen b ON a.id_kategori_dokumen = b.id_kategori_dokumen
        ")->result();
    }

    //Fungsi untuk menampilkan data dokumen yang dipilih saat proses update
    function get_dokumen($id_dokumen){
        return $this->db->query("
            SELECT *
            FROM tbl_dokumen a
            JOIN tbl_kategori_dokumen b ON a.id_kategori_dokumen = b.id_kategori_dokumen
            WHERE a.id_dokumen = '$id_dokumen'
        ")->result();
    }

    //Fungsi untuk menampilkan kategori dokumen sesuai yang dipilih
    function get_kategori($id_kategori_dokumen){
        return $this->db->query("SELECT * FROM tbl_kategori_dokumen WHERE id_kategori_dokumen = '$id_kategori_dokumen'")->row()->nm_kategori_dokumen; 
    }

    //Fungsi untuk menampilkan semua dokumen pada kategori yang dipilih
    function get_dokumen_kategori($id_kategori_dokumen){
        return $this->db->query("
            SELECT *
            FROM tbl_dokumen a
            JOIN tbl_kategori_dokumen b ON a.id_kategori_dokumen = b.id_kategori_dokumen
            WHERE a.id_kategori_dokumen = '$id_kategori_dokumen'
        ")->result();
    }

    //Fungsi untuk menampilkan id kategori dokumen Auto increment saat proses insert (otomatis)
    public function id_kategori_dokumen()
    {
        $q = $this->db->query("select MAX(RIGHT(id_kategori_dokumen,4)) as id_max from tbl_kategori_dokumen");
        $id = "";
        if($q->num_rows()>0)
        {
            foreach($q->result() as $k)
            {
                $tmp = ((int)$k->id_max)+1;
                $id = sprintf("%04s", $tmp);
            }
        }
        else
        {
            $id = "0001";
        }
        return "KD-".$id;
    }

    //Fungsi untuk menampilkan id laporan auto increment saat proses insert (otomatis)
    public function id_laporan()
    {
        $q = $this->db->query("select MAX(RIGHT(id_laporan,4)) as id_max from tbl_laporan");
        $id = "";
        if($q->num_rows()>0)
        {
            foreach($q->result() as $k)
            {
                $tmp = ((int)$k->id_max)+1;
                $id = sprintf("%04s", $tmp);
            }
        }
        else
        {
            $id = "0001";
        }
        return "LR-".$id;
    }

    //Fungsi untuk menampilkan semua data laporan
    function get_all_laporan(){
        return $this->db->query("
            SELECT *
            FROM tbl_laporan a
            JOIN tbl_kategori_laporan b ON a.id_kategori_laporan = b.id_kategori_laporan
        ")->result();
    }

    //Fungsi untuk menampilkan data laporan yang dipilih
    function get_laporan($id_laporan){
        return $this->db->query("
            SELECT *
            FROM tbl_laporan a
            JOIN tbl_kategori_laporan b ON a.id_kategori_laporan = b.id_kategori_laporan
            WHERE a.id_laporan = '$id_laporan'
        ")->result();
    }

    //Fungsi untuk menampilkan semua laporan sesuai kategori yang dipilih
    function get_laporan_kategori($id_kategori_laporan){
        return $this->db->query("
            SELECT *
            FROM tbl_laporan a
            JOIN tbl_kategori_laporan b ON a.id_kategori_laporan = b.id_kategori_laporan
            WHERE a.id_kategori_laporan = '$id_kategori_laporan'
        ")->result();
    }

    //Fungsi untuk menamppilkan id kategori laporan auto increment saat proses insert
    public function id_kategori_laporan()
    {
        $q = $this->db->query("select MAX(RIGHT(id_kategori_laporan,4)) as id_max from tbl_kategori_laporan");
        $id = "";
        if($q->num_rows()>0)
        {
            foreach($q->result() as $k)
            {
                $tmp = ((int)$k->id_max)+1;
                $id = sprintf("%04s", $tmp);
            }
        }
        else
        {
            $id = "0001";
        }
        return "KL-".$id;
    } 

    //Fungsi untuk menampilkan id buku auto increment saat proses insert (otomatis)
    public function id_buku()
    {
        $q = $this->db->query("select MAX(RIGHT(id_buku,4)) as id_max from tbl_buku");
        $id = "";
        if($q->num_rows()>0)
        {
            foreach($q->result() as $k)
            {
                $tmp = ((int)$k->id_max)+1;
                $id = sprintf("%04s", $tmp);
            }
        }
        else
        {
            $id = "0001";
        }
        return "BP-".$id;
    }

    //Fungsi untuk menampilkan id komentar auto increment saat proses insert (otomatis)
    public function id_komentar_berita()
    {
        $q = $this->db->query("select MAX(RIGHT(id_komentar_berita,4)) as id_max from tbl_komentar_berita");
        $id = "";
        if($q->num_rows()>0)
        {
            foreach($q->result() as $k)
            {
                $tmp = ((int)$k->id_max)+1;
                $id = sprintf("%04s", $tmp);
            }
        }
        else
        {
            $id = "0001";
        }
        return "KM-".$id;
    }

    //Fungsi untuk menampilkan id media auto increment saat proses insert (otomatis)
    public function id_media()
    {
        $q = $this->db->query("select MAX(RIGHT(id_media,4)) as id_max from tbl_media");
        $id = "";
        if($q->num_rows()>0)
        {
            foreach($q->result() as $k)
            {
                $tmp = ((int)$k->id_max)+1;
                $id = sprintf("%04s", $tmp);
            }
        }
        else
        {
            $id = "0001";
        }
        return "MD-".$id;
    }  

    //Fungsi untuk menampilkan id video auto increment saat proses insert (otomatis)
    public function id_video()
    {
        $q = $this->db->query("select MAX(RIGHT(id_video,4)) as id_max from tbl_video");
        $id = "";
        if($q->num_rows()>0)
        {
            foreach($q->result() as $k)
            {
                $tmp = ((int)$k->id_max)+1;
                $id = sprintf("%04s", $tmp);
            }
        }
        else
        {
            $id = "0001";
        }
        return "VD-".$id;
    }

    //Fungsi untuk menampilkan id foto auto increment saat proses insert (otomatis)
    public function id_foto()
    {
        $q = $this->db->query("select MAX(RIGHT(id_foto,4)) as id_max from tbl_foto");
        $id = "";
        if($q->num_rows()>0)
        {
            foreach($q->result() as $k)
            {
                $tmp = ((int)$k->id_max)+1;
                $id = sprintf("%04s", $tmp);
            }
        }
        else
        {
            $id = "0001";
        }
        return "FT-".$id;
    }

    //Fungsi untuk mengecek apakah akun user sudah pernah dibuat atau belum
    function cek_user($username) {
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where('username', $username);
        $this->db->limit(1);

        //get query and processing
        $query = $this->db->get();
        if($query->num_rows() == 1) {
            return TRUE;
        } else {
            return FALSE;
        }
    } 

    //Fungsi untuk melakukan login
    function login($username, $password) {
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where('username', $username);
        $this->db->where('password', md5($password));
        $this->db->limit(1);

        $query = $this->db->get();
        if($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }
}
