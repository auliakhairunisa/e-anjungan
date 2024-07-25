<?php
class Data_pengunjung extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('visitor_model');
        $this->load->helper('dompdf_helper');
    }

    public function index()
    {
        $data['pgj'] = $this->visitor_model->tampil_data()->result();
        $this->load->view('admin/layout_admin/v_head');
        $this->load->view('admin/layout_admin/v_header');
        $this->load->view('admin/layout_admin/v_nav');
        $this->load->view('admin/data_pengunjung', $data);
        $this->load->view('admin/layout_admin/v_footer');
        //$this->load->view('admin/layout_admin/v_wrapper', $data, FALSE);
    }

    public function search()
    {
        $keyword = $this->input->post('keyword');
        $data['pgj'] = $this->visitor_model->get_keyword($keyword);
        $this->load->view('admin/layout_admin/v_head');
        $this->load->view('admin/layout_admin/v_header');
        $this->load->view('admin/layout_admin/v_nav');
        $this->load->view('admin/data_pengunjung', $data);
        $this->load->view('admin/layout_admin/v_footer');
    }

    public function pdf()
    {
        $bulan = $this->input->get('bulan');
        $tahun = $this->input->get('tahun');

        $this->load->model('visitor_model');

        if ($bulan && $tahun) {
            $data['pgj'] = $this->visitor_model->get_filtered_data($bulan, $tahun)->result();
        } elseif ($tahun) {
            $data['pgj'] = $this->visitor_model->get_filtered_data_by_year($tahun)->result();
        } else {
            $data['pgj'] = $this->visitor_model->tampil_data()->result();
        }

        // Tambahkan bulan dan tahun ke data
        $data['bulan'] = $bulan;
        $data['tahun'] = $tahun;

        $html = $this->load->view('admin/log_pengunjung', $data, TRUE);
        pdf_create($html, 'Data_Pengunjung');
    }



    public function dashboard()
    {
        $data['chart_data'] = $this->Visitor_model->get_visitors_per_month();
        $this->load->view('dashboard', $data);
    }
}
