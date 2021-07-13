<?php

class Model_kategori extends CI_Model{
    public function data_top(){
        return $this->db->get_where("tb_barang", array('kategori'=>'top'));
    }
    public function data_bottom(){
        return $this->db->get_where("tb_barang", array('kategori'=>'bottom'));
    }
    public function data_dress(){
        return $this->db->get_where("tb_barang", array('kategori'=>'dress'));
    }
    public function data_set(){
        return $this->db->get_where("tb_barang", array('kategori'=>'set'));
    }
    public function data_jumpsuit(){
        return $this->db->get_where("tb_barang", array('kategori'=>'jumpsuit'));
    }
    public function data_outer(){
        return $this->db->get_where("tb_barang", array('kategori'=>'outer'));
    }
    public function data_skirt(){
        return $this->db->get_where("tb_barang", array('kategori'=>'skirt'));
    }
    public function data_accessories(){
        return $this->db->get_where("tb_barang", array('kategori'=>'accessories'));
    }
}