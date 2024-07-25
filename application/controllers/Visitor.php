<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Visitor extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Visitor_model');
    }

    public function index()
    {
        $data = array(
            'title' => 'Anjungan',
            'isi' => 'visitor_form'
        );
        $this->load->view('layout_home/v_wrapper', $data, FALSE);
    }

    public function submit()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('flexRadioDefault', 'Tipe Pengunjung', 'required');
        $this->form_validation->set_rules('asal', 'Daerah Asal', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal Kunjungan', 'required');
        $this->form_validation->set_rules('kesan', 'Kesan', 'required');
        $this->form_validation->set_rules('pesan', 'Pesan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('visitor_form');
        } else {
            $data = array(
                'nama' => $this->input->post('nama'),
                'tipe_pengunjung' => $this->input->post('flexRadioDefault'),
                'asal' => $this->input->post('asal'),
                'tanggal' => $this->input->post('tanggal'),
                'kesan' => $this->input->post('kesan'),
                'pesan' => $this->input->post('pesan')
            );

            if ($this->Visitor_model->insert_visitor($data)) {
                $this->session->set_flashdata('success', 'Data sudah tersimpan.');
            } else {
                $this->session->set_flashdata('error', 'Error!');
            }

            redirect('visitor');
        }
    }
}
