<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model {
    public function daftar($data){
        return $this->db->insert("admin", $data);
    }
    public function cekEmail($email){
        return $this->db->get_where('admin',['email' => $email]);
    }
    public function pencarian($keyword){
		$this->db->select('*');
		$this->db->from('artikel');
		$this->db->like('Judul', $keyword);
		$this->db->or_like('nama_pembuat',$keyword);
		return $this->db->get()->result();
	}
}