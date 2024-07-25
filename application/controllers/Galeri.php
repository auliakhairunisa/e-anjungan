<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_galeri');
    }

    public function index()
    {
        $data['galeri'] = $this->model_galeri->tampil_data()->result();
        $this->load->view('layout_home/v_head');
        $this->load->view('layout_home/v_nav');
        $this->load->view('galeri', $data);
        $this->load->view('layout_home/v_footer');

        //$this->load->view('admin/layout_admin/v_wrapper', $data, FALSE);
    }

    public function detail($id_galeri)
    {
        $data['galeri'] = $this->model_galeri->detail_galeri($id_galeri);
        $this->load->view('layout_home/v_head');
        $this->load->view('layout_home/v_nav');
        $this->load->view('detail_galeri', $data);
        $this->load->view('layout_home/v_footer');
    }

    public function search()
    {
        $keyword = $this->input->post('keyword');
        $this->load->model('model_galeri');
        $data['galeri'] = $this->model_galeri->get_keyword($keyword);

        if (empty($data['galeri'])) {
            $data['message'] = 'Data tidak ditemukan';
        }
        $this->load->view('layout_home/v_head');
        $this->load->view('layout_home/v_nav');
        $this->load->view('galeri', $data);
        $this->load->view('layout_home/v_footer');
    }
}
