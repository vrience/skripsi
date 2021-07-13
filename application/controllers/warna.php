<?php 

class Warna extends CI_Controller{
    public function white(){
        $data['white']= $this->model_warna->data_white()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('warna/white', $data);
        $this->load->view('templates/footer');
    }
    public function black(){
        $data['black']= $this->model_warna->data_black()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('warna/black', $data);
        $this->load->view('templates/footer');
    }
    public function pink(){
        $data['pink']= $this->model_warna->data_pink()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('warna/pink', $data);
        $this->load->view('templates/footer');
    }
    public function red(){
        $data['red']= $this->model_warna->data_red()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('warna/red', $data);
        $this->load->view('templates/footer');
    }
    public function brown(){
        $data['brown']= $this->model_warna->data_brown()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('warna/brown', $data);
        $this->load->view('templates/footer');
    }
    public function green(){
        $data['green']= $this->model_warna->data_green()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('warna/green', $data);
        $this->load->view('templates/footer');
    }
    public function blue(){
        $data['blue']= $this->model_warna->data_blue()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('warna/blue', $data);
        $this->load->view('templates/footer');
    }
    public function cream(){
        $data['cream']= $this->model_warna->data_cream()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('warna/cream', $data);
        $this->load->view('templates/footer');
    }
}