<?php

class Model_warna extends CI_Model{
    public function data_white(){
        return $this->db->get_where("tb_barang", array('warna'=>'white'));
    }
    public function data_black(){
        return $this->db->get_where("tb_barang", array('warna'=>'black'));
    }
    public function data_pink(){
        return $this->db->get_where("tb_barang", array('warna'=>'pink'));
    }
    public function data_red(){
        return $this->db->get_where("tb_barang", array('warna'=>'red'));
    }
    public function data_brown(){
        return $this->db->get_where("tb_barang", array('warna'=>'brown'));
    }
    public function data_green(){
        return $this->db->get_where("tb_barang", array('warna'=>'green'));
    }
    public function data_blue(){
        return $this->db->get_where("tb_barang", array('warna'=>'blue'));
    }
    public function data_cream(){
        return $this->db->get_where("tb_barang", array('warna'=>'cream'));
    }
}