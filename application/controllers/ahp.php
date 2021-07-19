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
            $data['barang'] = $this->model_barang->tampil_data()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('form_ahp', $data);
            $this->load->view('templates/footer');
    }
    
    public function change_rating()
    {
        // $this->form_validation->set_rules('r_kenyamanan', 'Rating Kenyamanan', 'required|integer', [
        //     'required' => 'Rating Kenyamanan Wajib Diisi!',
        //     'integer' => 'Rating Kenyamanan Wajib Diisi!'
        // ]);
        // $this->form_validation->set_rules('r_harga', 'Rating Harga', 'required|integer', [
        //     'required' => 'Rating Harga Wajib Diisi!'
        // ]);
        // $this->form_validation->set_rules('r_formalitas', 'Rating Formalitas', 'required|integer', [
        //     'required' => 'Rating Formalitas Wajib Diisi!',
        // ]);
        // if ($this->form_validation->run() == FALSE) {
        //     $this->load->view('templates_admin/header');
        //     $this->load->view('templates_admin/sidebar');
        //     $this->load->view('admin/tambah_barang');
        //     $this->load->view('templates_admin/footer');
        // } else {
        $r_kenyamanan = $this->input->post('r_kenyamanan');
        $r_harga = $this->input->post('r_harga');
        $r_formalitas = $this->input->post('r_formalitas');
        $data_barang = $this->model_barang->detail_brg($this->input->post('id_barang'));
        $r_kenyamanan_edit = 0;
        $r_harga_edit = 0;
        $r_formalitas_edit = 0;
        foreach ($data_barang as $brg) :
            // echo ("DATA KENYAMANAN ".$brg->r_kenyamanan);
            // echo ("DATA HARGA ".$brg->r_harga);
            // echo ("DATA FORM ".$brg->r_formalitas);
            $count_review = $brg->c_review;
            $r_kenyamanan_edit = ($brg->r_kenyamanan + $r_kenyamanan) / 2;
            $r_harga_edit = ($brg->r_harga + $r_harga) / 2;
            $r_formalitas_edit = ($brg->r_formalitas + $r_formalitas) / 2;
        endforeach;
        $data = array(
            'r_kenyamanan' => $r_kenyamanan_edit,
            'r_harga' => $r_harga_edit,
            'r_formalitas' => $r_formalitas_edit,
            'c_review' => ($count_review + 1),
        );
        $where = array(
            'id_brg' => $this->input->post('id_barang')
        );
        $is_success = $this->model_barang->update_data($where, $data, 'tb_barang');
        redirect('welcome');
        //     // if($is_success){
        //     // }else{
        //     //     echo  $is_success;
        //     // }
        // }
    }
    public function filter_item_by_criteria()
    {
        // $this->form_validation->set_rules('r_kenyamanan', 'Rating Kenyamanan', 'required', [
        //     'required' => 'Rating Kenyamanan Wajib Diisi!'
        // ]);
        // $this->form_validation->set_rules('r_harga', 'Rating Harga', 'required', [
        //     'required' => 'Rating Harga Wajib Diisi!'
        // ]);
        // $this->form_validation->set_rules('r_formalitas', 'Rating Formalitas', 'required', [
        //     'required' => 'Rating Formalitas Wajib Diisi!',
        // ]);
        // if ($this->form_validation->run() == FALSE) {
        //     $this->load->view('templates_admin/header');
        //     $this->load->view('templates_admin/sidebar');
        //     $this->load->view('admin/tambah_barang');
        //     $this->load->view('templates_admin/footer');
        // } else {
        $product_1_id = $this->input->post('product_comp_1');
        $product_2_id = $this->input->post('product_comp_2');
        $product_3_id = $this->input->post('product_comp_3');
        $kenyamanan_vs_harga = $this->input->post('kevsha');
        $formalitas_vs_kenyamanan = $this->input->post('kevsfo');
        $harga_vs_formalitas = $this->input->post('havsfo');
        $r_kevsha = $this->input->post('r_kevsha');
        $r_kevsfo = $this->input->post('r_kevsfo');
        $r_havsfo = $this->input->post('r_havsfo');
        //   kenyamanan[0] , harga [1], formalitas[2]
        $rating_filter = array(
            array(1, 0, 0),
            array(0, 1, 0),
            array(0, 0, 1),
        );
        // kenyamanan_vs_harga : kenyamanan (1) harga (2)
        if ($kenyamanan_vs_harga == 1) {
            // if 1, maka kenyamanan menang
            // echo "kenyamanan ".$rating_filter[0][0];
            // $rating_filter[0][0] =3; //buat ngubah
            // echo "kenyamanan ".$rating_filter[0][0];
            $rating_filter[0][1] = $r_kevsha;
            $rating_filter[1][0] = 1 / $r_kevsha;
        } else {
            // echo "hraga";
            $rating_filter[0][1] = 1 / $r_kevsha;
            $rating_filter[1][0] = $r_kevsha;
        }
        // formalitas_vs_kenyamanan : formal (1) kenyamanan (2)
        if ($formalitas_vs_kenyamanan == 1) {
            $rating_filter[0][2] = $r_kevsfo;
            $rating_filter[2][0] = 1 / $r_kevsfo;
        } else {
            $rating_filter[0][2] = 1 / $r_kevsfo;
            $rating_filter[2][0] = $r_kevsfo;
        }
        // harga_vs_formalitas : harga (1) formal (2)
        if ($harga_vs_formalitas == 1) {
            $rating_filter[1][2] = $r_havsfo;
            $rating_filter[2][1] = 1 / $r_havsfo;
        } else {
            $rating_filter[1][2] = 1 / $r_havsfo;
            $rating_filter[2][1] = $r_havsfo;
        }

        // printf ($rating_filter[0][0]." ".$rating_filter[0][1]." ".$rating_filter[0][2]."\n");
        // printf ($rating_filter[1][0]." ".$rating_filter[1][1]." ".$rating_filter[1][2]."\n");
        // printf ($rating_filter[2][0]." ".$rating_filter[2][1]." ".$rating_filter[2][2]."\n");

        $data_barang_1 = $this->model_barang->detail_brg($product_1_id);
        $data_barang_2 = $this->model_barang->detail_brg($product_2_id);
        $data_barang_3 = $this->model_barang->detail_brg($product_3_id);
        $rating_data_barang = array(
            array(1, 0, 0), //kenyamanan (brang 1) (barang 2 ) (brang 3)
            array(0, 1, 0), //harga (brang 1) (barang 2 ) (brang 3)
            array(0, 0, 1), //formalitas (brang 1) (barang 2 ) (brang 3)
        );
        foreach ($data_barang_1 as $brg_1) :
            $rating_data_barang[0][0] = $brg_1->r_kenyamanan;
            $rating_data_barang[0][1] = $brg_1->r_harga;
            $rating_data_barang[0][2] = $brg_1->r_formalitas;
        endforeach;

        foreach ($data_barang_2 as $brg_2) :
            $rating_data_barang[1][0] = $brg_2->r_kenyamanan;
            $rating_data_barang[1][1] = $brg_2->r_harga;
            $rating_data_barang[1][2] = $brg_2->r_formalitas;
        endforeach;

        foreach ($data_barang_3 as $brg_3) :
            $rating_data_barang[2][0] = $brg_3->r_kenyamanan;
            $rating_data_barang[2][1] = $brg_3->r_harga;
            $rating_data_barang[2][2] = $brg_3->r_formalitas;
        endforeach;

        $rating_filter_barang_kenyamanan = array(
            array(1, 0, 0),
            array(0, 1, 0),
            array(0, 0, 1),
        );
        $rating_filter_barang_harga = array(
            array(1, 0, 0),
            array(0, 1, 0),
            array(0, 0, 1),
        );
        $rating_filter_barang_formalitas = array(
            array(1, 0, 0),
            array(0, 1, 0),
            array(0, 0, 1),
        );

        //    b1, b2, b3
        // b1,
        // b2,
        // b3
        // kenyamanan 
        // array 1 barang array 2 kriteria
        if ($rating_data_barang[0][0] > $rating_data_barang[1][0]) {
            $rating_filter_barang_kenyamanan[0][1] = $rating_data_barang[0][0];
            $rating_filter_barang_kenyamanan[1][0] = 1 / $rating_data_barang[0][0];
        } else {
            $rating_filter_barang_kenyamanan[0][1] = 1 / $rating_data_barang[1][0];
            $rating_filter_barang_kenyamanan[1][0] = $rating_data_barang[1][0];
        }
        if ($rating_data_barang[0][0] > $rating_data_barang[2][0]) {
            $rating_filter_barang_kenyamanan[0][2] = $rating_data_barang[0][0];
            $rating_filter_barang_kenyamanan[2][0] = 1 / $rating_data_barang[0][0];
        } else {
            $rating_filter_barang_kenyamanan[0][2] = 1 / $rating_data_barang[2][0];
            $rating_filter_barang_kenyamanan[2][0] = $rating_data_barang[2][0];
        }
        if ($rating_data_barang[1][0] > $rating_data_barang[2][0]) {
            $rating_filter_barang_kenyamanan[1][2] = $rating_data_barang[1][0];
            $rating_filter_barang_kenyamanan[2][1] = 1 / $rating_data_barang[1][0];
        } else {
            $rating_filter_barang_kenyamanan[1][2] = 1 / $rating_data_barang[2][0];
            $rating_filter_barang_kenyamanan[2][1] = $rating_data_barang[2][0];
        }
        // harga
        if ($rating_data_barang[0][1] > $rating_data_barang[1][1]) {
            $rating_filter_barang_harga[0][1] = $rating_data_barang[0][1];
            $rating_filter_barang_harga[1][0] = 1 / $rating_data_barang[0][1];
        } else {
            $rating_filter_barang_harga[0][1] = 1 / $rating_data_barang[1][1];
            $rating_filter_barang_harga[1][0] = $rating_data_barang[1][1];
        }
        if ($rating_data_barang[0][1] > $rating_data_barang[2][1]) {
            $rating_filter_barang_harga[0][2] = $rating_data_barang[0][1];
            $rating_filter_barang_harga[2][0] = 1 / $rating_data_barang[0][1];
        } else {
            $rating_filter_barang_harga[0][2] = 1 / $rating_data_barang[2][1];
            $rating_filter_barang_harga[2][0] = $rating_data_barang[2][1];
        }
        if ($rating_data_barang[1][1] > $rating_data_barang[2][1]) {
            $rating_filter_barang_harga[1][2] = $rating_data_barang[1][1];
            $rating_filter_barang_harga[2][1] = 1 / $rating_data_barang[1][1];
        } else {
            $rating_filter_barang_harga[1][2] = 1 / $rating_data_barang[2][1];
            $rating_filter_barang_harga[2][1] = $rating_data_barang[2][1];
        }
        // formalitas
        if ($rating_data_barang[0][2] > $rating_data_barang[1][2]) {
            $rating_filter_barang_formalitas[0][1] = $rating_data_barang[0][2];
            $rating_filter_barang_formalitas[1][0] = 1 / $rating_data_barang[0][2];
        } else {
            $rating_filter_barang_formalitas[0][1] = 1 / $rating_data_barang[1][2];
            $rating_filter_barang_formalitas[1][0] = $rating_data_barang[1][2];
        }
        if ($rating_data_barang[0][2] > $rating_data_barang[2][2]) {
            $rating_filter_barang_formalitas[0][2] = $rating_data_barang[0][2];
            $rating_filter_barang_formalitas[2][0] = 1 / $rating_data_barang[0][2];
        } else {
            $rating_filter_barang_formalitas[0][2] = 1 / $rating_data_barang[2][2];
            $rating_filter_barang_formalitas[2][0] = $rating_data_barang[2][2];
        }
        if ($rating_data_barang[1][2] > $rating_data_barang[2][2]) {
            $rating_filter_barang_formalitas[1][2] = $rating_data_barang[1][2];
            $rating_filter_barang_formalitas[2][1] = 1 / $rating_data_barang[1][2];
        } else {
            $rating_filter_barang_formalitas[1][2] = 1 / $rating_data_barang[2][2];
            $rating_filter_barang_formalitas[2][1] = $rating_data_barang[2][2];
        }

        $data_eigen_criteria = $this->get_eigen_by_sum_rating($rating_filter);
        $data_eigen_kenyamanan = $this->get_eigen_by_sum_rating($rating_filter_barang_kenyamanan);
        $data_eigen_harga = $this->get_eigen_by_sum_rating($rating_filter_barang_harga);
        $data_eigen_formalitas = $this->get_eigen_by_sum_rating($rating_filter_barang_formalitas);
        // printf ($data_eigen_criteria[0]." ".$data_eigen_criteria[1]." ".$data_eigen_criteria[2]."\n");
        // printf ($data_eigen_kenyamanan[0]." ".$data_eigen_kenyamanan[1]." ".$data_eigen_kenyamanan[2]."\n");
        // printf ($data_eigen_harga[0]." ".$data_eigen_harga[1]." ".$data_eigen_harga[2]."\n");
        // printf ($data_eigen_formalitas[0]." ".$data_eigen_formalitas[1]." ".$data_eigen_formalitas[2]."\n");

        // printf ($data_eigen_criteria[0]+$data_eigen_criteria[1]+$data_eigen_criteria[2]);
        // printf ($data_eigen_kenyamanan[0]+$data_eigen_kenyamanan[1]+$data_eigen_kenyamanan[2]);
        // printf ($data_eigen_harga[0]+$data_eigen_harga[1]+$data_eigen_harga[2]);
        // printf ($data_eigen_formalitas[0]+$data_eigen_formalitas[1]+$data_eigen_formalitas[2]);

        // hitung rekomendasi
        // 0 kenyamanan, 1 harga, 2 formalitas
        $skor_rekomendasi_barang_1 =
            (($data_eigen_criteria[0] * $data_eigen_kenyamanan[0]) +
                ($data_eigen_criteria[1] * $data_eigen_harga[0]) +
                ($data_eigen_criteria[2] * $data_eigen_formalitas[0]));

        $skor_rekomendasi_barang_2 =
            (($data_eigen_criteria[0] * $data_eigen_kenyamanan[1]) +
                ($data_eigen_criteria[1] * $data_eigen_harga[1]) +
                ($data_eigen_criteria[2] * $data_eigen_formalitas[1]));

        $skor_rekomendasi_barang_3 =
            (($data_eigen_criteria[0] * $data_eigen_kenyamanan[2]) +
                ($data_eigen_criteria[1] * $data_eigen_harga[2]) +
                ($data_eigen_criteria[2] * $data_eigen_formalitas[2]));

        // echo ("DATA: ".($skor_rekomendasi_barang_1+$skor_rekomendasi_barang_2+$skor_rekomendasi_barang_3));
        // echo ("DATA: ".$skor_rekomendasi_barang_1." ".$skor_rekomendasi_barang_2." ".$skor_rekomendasi_barang_3);
        $max_score = max($skor_rekomendasi_barang_1, $skor_rekomendasi_barang_2, $skor_rekomendasi_barang_3);
        $min_score = min($skor_rekomendasi_barang_1, $skor_rekomendasi_barang_2, $skor_rekomendasi_barang_3);
        $middle_score = 1 - ($max_score + $min_score);
        if ($skor_rekomendasi_barang_1 == $max_score) {
            $data_barang_rekomendasi['barang_rec_1'] = $data_barang_1;
        } else if ($skor_rekomendasi_barang_2 == $max_score) {
            $data_barang_rekomendasi['barang_rec_1'] = $data_barang_2;
        } else if ($skor_rekomendasi_barang_3 == $max_score) {
            $data_barang_rekomendasi['barang_rec_1'] = $data_barang_3;
        }
        if ($skor_rekomendasi_barang_1 == $min_score) {
            $data_barang_rekomendasi['barang_rec_3'] = $data_barang_1;
        } else if ($skor_rekomendasi_barang_2 == $min_score) {
            $data_barang_rekomendasi['barang_rec_3'] = $data_barang_2;
        } else if ($skor_rekomendasi_barang_3 == $min_score) {
            $data_barang_rekomendasi['barang_rec_3'] = $data_barang_3;
        }
        if (round($skor_rekomendasi_barang_1, 2) == round($middle_score, 2)) {
            $data_barang_rekomendasi['barang_rec_2'] = $data_barang_1;
            // echo ("SKOR MIDDLE1 : ");
        } else if (round($skor_rekomendasi_barang_2, 2) == round($middle_score, 2)) {
            // echo ("SKOR MIDDLE2 : ");
            $data_barang_rekomendasi['barang_rec_2'] = $data_barang_2;
        } else if (round($skor_rekomendasi_barang_3, 2) == round($middle_score, 2)) {
            // echo ("SKOR MIDDLE3 : ");
            $data_barang_rekomendasi['barang_rec_2'] = $data_barang_3;
        }
        // echo ("SKOR MIDDLE : ".round($skor_rekomendasi_barang_3,2)." ".round($middle_score,2));
        // foreach ($data_barang_rekomendasi['barang_rec_1'] as $brg_rec_1) :
        //     echo ("Rekomendasi 1: " . $brg_rec_1->nama_brg);
        // endforeach;
        // foreach ($data_barang_rekomendasi['barang_rec_2'] as $brg_rec_2) :
        //     echo (" \nRekomendasi 2: " . $brg_rec_2->nama_brg);
        // endforeach;
        // foreach ($data_barang_rekomendasi['barang_rec_3'] as $brg_rec_3) :
        //     echo (" \nRekomendasi 3: " . $brg_rec_3->nama_brg);
        // endforeach;

        //tinggal lempar  $data_barang_rekomendasi di view,..
        $data['data_barang_rekomendasi'] = $data_barang_rekomendasi;
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('hasil_ahp', $data);
        $this->load->view('templates/footer');
    }
    public function get_eigen_by_sum_rating($rating_filter)
    {
        $rating_sum = array(
            ($rating_filter[0][0] + $rating_filter[1][0] + $rating_filter[2][0]),
            ($rating_filter[0][1] + $rating_filter[1][1] + $rating_filter[2][1]),
            ($rating_filter[0][2] + $rating_filter[1][2] + $rating_filter[2][2]),
        );
        $rating_eigen = array(
            array(
                ($rating_filter[0][0] / $rating_sum[0]),
                ($rating_filter[0][1] / $rating_sum[1]),
                ($rating_filter[0][2] / $rating_sum[2]),
            ),
            array(
                ($rating_filter[1][0] / $rating_sum[0]),
                ($rating_filter[1][1] / $rating_sum[1]),
                ($rating_filter[1][2] / $rating_sum[2]),
            ),
            array(
                ($rating_filter[2][0] / $rating_sum[0]),
                ($rating_filter[2][1] / $rating_sum[1]),
                ($rating_filter[2][2] / $rating_sum[2]),
            ),
        );
        $sum_eigen_avg = array(
            ($rating_eigen[0][0] + $rating_eigen[0][1] + $rating_eigen[0][2]) / 3,
            ($rating_eigen[1][0] + $rating_eigen[1][1] + $rating_eigen[1][2]) / 3,
            ($rating_eigen[2][0] + $rating_eigen[2][1] + $rating_eigen[2][2]) / 3,
        );
        return $sum_eigen_avg;
    }
}
