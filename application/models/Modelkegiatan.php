<?php
/**
 *
 */
class Modelkegiatan extends CI_Model
{

  public function get($batas=NULL,$offset=NULL,$cari=NULL)
  {
      if ($batas != NULL) {
        $this->db->limit($batas,$offset);
      }
      if ($cari != NULL) {
          $this->db->or_like($cari);
      }
      $this->db->from('kegiatan');
      $query = $this->db->get();
      return $query->result();
  }
  public function jumlah_row($search)
  {
    $this->db->or_like($search);
    $query = $this->db->get('kegiatan');

    return $query->num_rows();
  }



  public function get_by_id($kondisi)
  {
      $this->db->from('kegiatan');
      $this->db->where($kondisi);
      $query = $this->db->get();
      return $query->row();
  }

  public function insert($data)
  {
      $this->db->insert('kegiatan',$data);
      return TRUE;
  }
  public function delete($where)
  {
      $this->db->where($where);
      $this->db->delete('kegiatan');
      return TRUE;
  }
  public function update($data,$kondisi)
  {
      $this->db->update('kegiatan',$data,$kondisi);
      return TRUE;
  }

}
