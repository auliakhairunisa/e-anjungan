<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('visitor_model');
    }

    public function index()
    {
        $year = $this->input->get('year');
        if (!$year) {
            $year = date('Y'); // Default to the current year if no year is specified
        }

        $data['title'] = 'Admin';
        $data['isi'] = 'admin/v_home';
        $data['chart_data'] = $this->visitor_model->get_visitors_per_month($year);
        $data['available_years'] = $this->visitor_model->get_available_years();
        $data['selected_year'] = $year;

        $this->load->view('admin/layout_admin/v_wrapper', $data);
    }
}
