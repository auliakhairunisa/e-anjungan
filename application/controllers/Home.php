<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_berita');
        $this->load->model('model_galeri');
    }

    public function index()
    {
        // Fetch the latest berita and galeri
        $data['berita'] = $this->model_berita->get_latest(2);
        $data['galeri'] = $this->model_galeri->get_latest(2);
        $data['slider'] = $this->model_galeri->get_slider_data(2);

        // Pass the data to the view
        $data['title'] = 'Anjungan';
        $data['isi'] = 'v_home';
        $this->load->view('layout_home/v_wrapper', $data, FALSE);
    }
}
