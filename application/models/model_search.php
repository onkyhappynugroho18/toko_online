<?php
    class Model_Search extends CI_Model{
        
        function get_search($match)
        {
            $this->db->like('nama_brg', $match);
            $this->db->or_like('kategori', $match);
            $query = $this->db->get('tb_barang');
            return $query;
        }
    }