<?php
class Ahp extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('role_id') != '2') {
            $this->session->set_flashdata('pesan', '<div class="alert 
            alert-danger alert-dismissible fade show" role="alert">
            Anda Belum Login!
            <button type="button" class="close" data-dismiss="alert" 
            aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>');
            redirect('auth/login');
        }
    }
   
    public function tambah_ke_keranjang($id)
    {
        $barang = $this->model_barang->find($id);

        $data = array(
            'id'      => $barang->id_brg,
            'qty'     => 1,
            'price'   => $barang->harga,
            'name'    => $barang->nama_brg
        );

        $this->cart->insert($data);
        redirect('welcome');
    }

    public function tambah_ahp()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('form_ahp');
        $this->load->view('templates/footer');
    }

}
