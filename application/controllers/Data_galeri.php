<?php
class Data_galeri extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_galeri');
    }

    public function index()
    {
        $data['galeri'] = $this->model_galeri->tampil_data()->result();
        $this->load->view('admin/layout_admin/v_head');
        $this->load->view('admin/layout_admin/v_header');
        $this->load->view('admin/layout_admin/v_nav');
        $this->load->view('admin/data_galeri', $data);
        $this->load->view('admin/layout_admin/v_footer');
        //$this->load->view('admin/layout_admin/v_wrapper', $data, FALSE);
    }

    public function tambah_aksi()
    {
        $nama_barang    = $this->input->post('nama_barang');
        $deskripsi      = $this->input->post('deskripsi');
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
            'nama_barang'       => $nama_barang,
            'deskripsi'         => $deskripsi,
            'gambar'            => $gambar
        );

        $this->model_galeri->tambah_galeri($data, 'tbl_galeri');
        redirect('data_galeri/index');
    }

    public function edit($id)
    {
        $where = array('id_galeri' => $id);
        $data['galeri'] = $this->model_galeri->edit_galeri($where, 'tbl_galeri')->result();

        $this->load->view('admin/layout_admin/v_head');
        $this->load->view('admin/layout_admin/v_header');
        $this->load->view('admin/layout_admin/v_nav');
        $this->load->view('admin/edit_galeri', $data);
        $this->load->view('admin/layout_admin/v_footer');
    }

    public function update()
    {
        $id             = $this->input->post('id_galeri');
        $deskripsi      = $this->input->post('deskripsi');

        $data = array(
            'deskripsi'      => $deskripsi
        );

        $where = array(
            'id_galeri' => $id
        );

        $this->model_galeri->update_data($where, $data, 'tbl_galeri');
        redirect('data_galeri/index');
    }

    public function hapus($id)
    {
        $where = array('id_galeri' => $id);
        $this->model_galeri->hapus_data($where, 'tbl_galeri');
        redirect('data_galeri/index');
    }

    public function search()
    {
        $keyword = $this->input->post('keyword');
        $data['galeri'] = $this->model_galeri->get_keyword($keyword);
        $this->load->view('admin/layout_admin/v_head');
        $this->load->view('admin/layout_admin/v_header');
        $this->load->view('admin/layout_admin/v_nav');
        $this->load->view('admin/data_galeri', $data);
        $this->load->view('admin/layout_admin/v_footer');
    }
}
