<?php
class Model_berita extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('tbl_berita');
    }

    public function tambah_berita($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function edit_berita($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function detail_berita($id_berita)
    {
        $result = $this->db->where('id_berita', $id_berita)->get('tbl_berita');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }

    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('tbl_berita');
        $this->db->like('judul_berita', $keyword);
        return $this->db->get()->result();
    }

    public function get_latest($limit)
    {
        $this->db->order_by('tanggal_berita', 'DESC');
        return $this->db->get('tbl_berita', $limit)->result();
    }
}
