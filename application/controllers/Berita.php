<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_berita');
    }

    public function index()
    {
        $data['berita'] = $this->model_berita->tampil_data()->result();
        $this->load->view('layout_home/v_head');
        $this->load->view('layout_home/v_nav');
        $this->load->view('berita', $data);
        $this->load->view('layout_home/v_footer');

        //$this->load->view('admin/layout_admin/v_wrapper', $data, FALSE);
    }

    public function detail($id_berita)
    {
        $data['berita'] = $this->model_berita->detail_berita($id_berita);
        $this->load->view('layout_home/v_head');
        $this->load->view('layout_home/v_nav');
        $this->load->view('detail_berita', $data);
        $this->load->view('layout_home/v_footer');
    }

    public function search()
    {
        $keyword = $this->input->post('keyword');
        $this->load->model('model_berita');
        $data['berita'] = $this->model_berita->get_keyword($keyword);

        if (empty($data['berita'])) {
            $data['message'] = 'Data tidak ditemukan';
        }
        $this->load->view('layout_home/v_head');
        $this->load->view('layout_home/v_nav');
        $this->load->view('berita', $data);
        $this->load->view('layout_home/v_footer');
    }
}
