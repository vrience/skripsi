<?php
class Data_barang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_barang');
        if ($this->session->userdata('role_id') != '1') {
            $this->session->set_flashdata('pesan', '<div class="alert 
            alert-danger alert-dismissible fade show" role="alert">
            Anda Belum Login!
            <button type="button" class="close" data-dismiss="alert" 
            aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>');
            redirect('auth/login');
        }
    }
    public function index()
    {
        $data['barang'] = $this->model_barang->tampil_data()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_barang', $data);
        $this->load->view('templates_admin/footer');
    }
    public function tambah_barang()
    {

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/tambah_barang');
        $this->load->view('templates_admin/footer');
    }

    public function tambah_aksi()
    {
        $this->form_validation->set_rules('nama_brg', 'Nama', 'required', [
            'required' => 'Nama Barang Wajib Diisi!'
        ]);
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required', [
            'required' => 'Keterangan Wajib Diisi!'
        ]);
        $this->form_validation->set_rules('harga', 'Harga', 'required|integer', [
            'required' => 'Harga Barang Wajib Diisi!',
            'integer' => 'Harga Barang Harus Berupa Angka!'
        ]);
        $this->form_validation->set_rules('stok', 'Stok', 'required|integer', [
            'required' => 'Jumlah Stok Wajib Diisi!',
            'integer' => 'Jumlah Stok Harus Berupa Angka!'
        ]);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates_admin/header');
            $this->load->view('templates_admin/sidebar');
            $this->load->view('admin/tambah_barang');
            $this->load->view('templates_admin/footer');
        } else {
            $nama_brg = $this->input->post('nama_brg');
            $keterangan = $this->input->post('keterangan');
            $kategori = $this->input->post('kategori');
            $harga = $this->input->post('harga');
            $stok = $this->input->post('stok');
            $warna = $this->input->post('warna');
            $r_kenyamanan = $this->input->post('r_kenyamanan');
            $r_harga = $this->input->post('r_harga');
            $r_formalitas = $this->input->post('r_formalitas');
            $gambar = $_FILES['gambar']['name'];
            if ($gambar = '') {
            } else {
                $config['upload_path'] = './uploads';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('gambar')) {
                    echo "Gambar Gagal di Upload!";
                } else {
                    $gambar = $this->upload->data('file_name');
                }
            }
            $data = array(
                'nama_brg' => $nama_brg,
                'keterangan' => $keterangan,
                'kategori' => $kategori,
                'harga' => $harga,
                'stok' => $stok,
                'warna' => $warna,
                'gambar' => $gambar,
                'r_kenyamanan' => $r_kenyamanan,
                'r_harga' => $r_harga,
                'r_formalitas' => $r_formalitas
            );
            $this->model_barang->tambah_barang($data, 'tb_barang');
            redirect('admin/data_barang/index');
        }
    }
    public function edit($id)
    {
        $where = array('id_brg' => $id);
        $data['barang'] = $this->model_barang->edit_barang($where, 'tb_barang')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/edit_barang', $data);
        $this->load->view('templates_admin/footer');
    }

    public function update()
    {
        $this->form_validation->set_rules('nama_brg', 'Nama', 'required', [
            'required' => 'Nama Barang Wajib Diisi!'
        ]);
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required', [
            'required' => 'Keterangan Wajib Diisi!'
        ]);
        $this->form_validation->set_rules('harga', 'Harga', 'required|integer', [
            'required' => 'Harga Barang Wajib Diisi!',
            'integer' => 'Harga Barang Harus Berupa Angka!'
        ]);
        if ($this->form_validation->run() == FALSE) {
            $id = $this->input->post('id_brg');
            $where = array('id_brg' => $id);
            $data['barang'] = $this->model_barang->edit_barang($where, 'tb_barang')->result();
            $this->load->view('templates_admin/header');
            $this->load->view('templates_admin/sidebar');
            $this->load->view('admin/edit_barang', $data);
            $this->load->view('templates_admin/footer');
        } else {
            $id = $this->input->post('id_brg');
            $nama_brg = $this->input->post('nama_brg');
            $keterangan = $this->input->post('keterangan');
            $kategori = $this->input->post('kategori');
            $harga = $this->input->post('harga');
            $stok = $this->input->post('stok');
            $warna = $this->input->post('warna');
            $r_kenyamanan = $this->input->post('r_kenyamanan');
            $r_harga = $this->input->post('r_harga');
            $r_formalitas = $this->input->post('r_formalitas');

            $data = array(
                'nama_brg' => $nama_brg,
                'keterangan' => $keterangan,
                'kategori' => $kategori,
                'harga' => $harga,
                'stok' => $stok,
                'warna' => $warna,
                'r_kenyamanan' => $r_kenyamanan,
                'r_harga' => $r_harga,
                'r_formalitas' => $r_formalitas
            );
            $where = array(
                'id_brg' => $id
            );
            $this->model_barang->update_data($where, $data, 'tb_barang');
            redirect('admin/data_barang/index');
        }
    }

    public function hapus($id)
    {
        $where = array('id_brg' => $id);
        $this->model_barang->hapus_data($where, 'tb_barang');
        redirect('admin/data_barang/index');
    }

    public function detail($id_brg)
    {
        $data['barang'] = $this->model_barang->detail_brg($id_brg);
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/detail_barang_admin', $data);
        $this->load->view('templates_admin/footer');
    }

    public function search()
    {
        $keyword = $this->input->post('keyword');
        $data['barang'] = $this->model_barang->get_keyword($keyword);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('welcome', $data);
        $this->load->view('templates/footer');
    }
}
