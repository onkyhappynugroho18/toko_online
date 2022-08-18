<?php

    class Model_kategori extends CI_Model{

        public function data_arlen_tops(){
            return $this->db->get_where("tb_barang", array('kategori' => 'Arlen Tops'));
        }

        public function data_arlen_gamis(){
            return $this->db->get_where("tb_barang", array('kategori' => 'Arlen Gamis'));
        }

        public function data_arlen_bottom(){
            return $this->db->get_where("tb_barang", array('kategori' => 'Arlen Bottom'));
        }
    }