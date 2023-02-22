<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Modelhitung extends CI_Model
{
    public function getuser()
    {
        // return $this->db->count_all('user');
        $this->db->select('name');
        $this->db->from('user');
        return $this->db->count_all_results();
    }
    
    public function getkegiatan()
    {
        // return $this->db->count_all('user');
        $this->db->select('nama_kegiatan');
        $this->db->from('kegiatan');
        return $this->db->count_all_results();
    }    
    
    public function getbeasiswa()
    {
        // return $this->db->count_all('user');
        $this->db->select('nama_beasiswa');
        $this->db->from('beasiswa');
        return $this->db->count_all_results();
    }    
    
    public function getkarir()
    {
        // return $this->db->count_all('user');
        $this->db->select('posisi');
        $this->db->from('karir');
        return $this->db->count_all_results();
    }    
    


}