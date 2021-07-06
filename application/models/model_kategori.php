<?php
class Model_kategori extends CI_Model{
    public function data_modem(){
        return $this->db->get_where("tb_barang",array('kategori' =>'Modem'));
    } 

    public function data_router(){
        return $this->db->get_where("tb_barang",array('kategori' =>'router'));
    } 
}

?>