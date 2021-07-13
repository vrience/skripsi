<?php 

class Kategori extends CI_Controller{
    public function top(){
        $data['top']= $this->model_kategori->data_top()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('kategori/top', $data);
        $this->load->view('templates/footer');
    }
    public function bottom(){
        $data['bottom']= $this->model_kategori->data_bottom()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('kategori/bottom', $data);
        $this->load->view('templates/footer');
    }
    public function dress(){
        $data['dress']= $this->model_kategori->data_dress()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('kategori/dress', $data);
        $this->load->view('templates/footer');
    }
    public function set(){
        $data['set']= $this->model_kategori->data_set()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('kategori/set', $data);
        $this->load->view('templates/footer');
    }
    public function jumpsuit(){
        $data['jumpsuit']= $this->model_kategori->data_jumpsuit()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('kategori/jumpsuit', $data);
        $this->load->view('templates/footer');
    }
    public function outer(){
        $data['outer']= $this->model_kategori->data_outer()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('kategori/outer', $data);
        $this->load->view('templates/footer');
    }
    public function skirt(){
        $data['skirt']= $this->model_kategori->data_skirt()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('kategori/skirt', $data);
        $this->load->view('templates/footer');
    }
    public function accessories(){
        $data['accessories']= $this->model_kategori->data_accessories()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('kategori/accessories', $data);
        $this->load->view('templates/footer');
    }
}