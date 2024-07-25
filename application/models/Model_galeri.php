<?php
class Model_galeri extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('tbl_galeri');
    }

    public function tambah_galeri($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function edit_galeri($where, $table)
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

    public function detail_galeri($id_galeri)
    {
        $result = $this->db->where('id_galeri', $id_galeri)->get('tbl_galeri');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }

    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('tbl_galeri');
        $this->db->like('nama_barang', $keyword);
        return $this->db->get()->result();
    }

    public function get_latest($limit)
    {
        $this->db->order_by('id_galeri', 'DESC'); // Assuming there is a 'tanggal' field
        return $this->db->get('tbl_galeri', $limit)->result();
    }

    public function get_slider_data($limit)
    {
        $this->db->order_by('id_galeri', 'DESC');
        return $this->db->get('tbl_galeri', $limit)->result();
    }
}
