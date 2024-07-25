<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Visitor_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function insert_visitor($data)
    {
        return $this->db->insert('visitors', $data);
    }

    public function tampil_data()
    {
        return $this->db->get('visitors');
    }

    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('visitors');
        $this->db->like('nama', $keyword);
        $this->db->or_like('asal', $keyword);
        $this->db->or_like('tanggal', $keyword);

        return $this->db->get()->result();
    }

    public function get_visitors_per_month($year)
    {
        $this->db->select('DATE_FORMAT(tanggal, "%m") as bulan, COUNT(*) as jumlah');
        $this->db->from('visitors');
        $this->db->where('YEAR(tanggal)', $year);
        $this->db->group_by('bulan');
        $this->db->order_by('bulan', 'ASC');
        return $this->db->get()->result();
    }

    public function get_available_years()
    {
        $this->db->select('DISTINCT YEAR(tanggal) as year');
        $this->db->from('visitors');
        $this->db->order_by('year', 'ASC');
        return $this->db->get()->result();
    }

    public function get_filtered_data($bulan, $tahun)
    {
        $this->db->where('MONTH(tanggal)', $bulan);
        $this->db->where('YEAR(tanggal)', $tahun);
        return $this->db->get('visitors');
    }

    public function get_filtered_data_by_year($tahun)
    {
        $this->db->where('YEAR(tanggal)', $tahun);
        return $this->db->get('visitors');
    }
}
