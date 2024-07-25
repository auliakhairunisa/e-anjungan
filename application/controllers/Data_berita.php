<?php
class Data_berita extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_berita');
    }

    public function index()
    {
        $data['berita'] = $this->model_berita->tampil_data()->result();
        $this->load->view('admin/layout_admin/v_head');
        $this->load->view('admin/layout_admin/v_header');
        $this->load->view('admin/layout_admin/v_nav');
        $this->load->view('admin/data_berita', $data);
        $this->load->view('admin/layout_admin/v_footer');
        //$this->load->view('admin/layout_admin/v_wrapper', $data, FALSE);
    }

    public function tambah_aksi()
    {
        $judul_berita   = $this->input->post('judul_berita');
        $tanggal_berita = $this->input->post('tanggal_berita');
        $posted_by      = $this->input->post('posted_by');
        $isi_berita     = $this->input->post('isi_berita');
        $gambar         = $_FILES['gambar']['name'];
        if ($gambar = '') {
        } else {
            $config['upload_path'] = './uploads';
            $config['allowed_types'] = 'jpg|jpeg|png';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo "Gambar gagal diupload";
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }
        $data = array(
            'judul_berita'      => $judul_berita,
            'tanggal_berita'    => $tanggal_berita,
            'posted_by'         => $posted_by,
            'isi_berita'        => $isi_berita,
            'gambar'            => $gambar
        );

        $this->model_berita->tambah_berita($data,  'tbl_berita');
        redirect('data_berita/index');
    }

    public function edit($id)
    {
        $where = array('id_berita' => $id);
        $data['berita'] = $this->model_berita->edit_berita($where, 'tbl_berita')->result();

        $this->load->view('admin/layout_admin/v_head');
        $this->load->view('admin/layout_admin/v_header');
        $this->load->view('admin/layout_admin/v_nav');
        $this->load->view('admin/edit_berita', $data);
        $this->load->view('admin/layout_admin/v_footer');
    }

    public function update()
    {
        $id = $this->input->post('id_berita');
        $judul_berita = $this->input->post('judul_berita');
        $tanggal_berita = $this->input->post('tanggal_berita');
        $posted_by = $this->input->post('posted_by');
        $isi_berita = $this->input->post('isi_berita');

        $data = array(
            'judul_berita'      => $judul_berita,
            'tanggal_berita'    => $tanggal_berita,
            'posted_by'         => $posted_by,
            'isi_berita'        => $isi_berita
        );

        $where = array(
            'id_berita' => $id
        );

        $this->model_berita->update_data($where, $data, 'tbl_berita');
        redirect('data_berita/index');
    }

    public function hapus($id)
    {
        $where = array('id_berita' => $id);
        $this->model_berita->hapus_data($where, 'tbl_berita');
        redirect('data_berita/index');
    }

    public function search()
    {
        $keyword = $this->input->post('keyword');
        $data['berita'] = $this->model_berita->get_keyword($keyword);
        $this->load->view('admin/layout_admin/v_head');
        $this->load->view('admin/layout_admin/v_header');
        $this->load->view('admin/layout_admin/v_nav');
        $this->load->view('admin/data_berita', $data);
        $this->load->view('admin/layout_admin/v_footer');
    }
}
