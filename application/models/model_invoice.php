<?php

    class Model_invoice extends CI_Model{
        public function index()
        {
            date_default_timezone_set('Asia/Jakarta');
            $nama = $this->input->post('nama');
            $alamat = $this->input->post('alamat');
            $data['users'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();

            $invoice = array(
                'nama'        => $nama,
                'alamat'      => $alamat,
                'tgl_pesan'   => date('Y-m-d H:i:s'),
                'batas_bayar' => date('Y-m-d H:i:s', mktime(date('H'), date('i'), date('s'), date('m'), date('d') + 1, date('Y'))),
                'id_user' => $data['users']['id']
            );

            $this->db->insert('tb_invoice', $invoice);
            $id_invoice = $this->db->insert_id();

            foreach($this->cart->contents() as $item){
                $data = array(
                    'id_invoice'        => $id_invoice,
                    'id_brg'            => $item['id'],
                    'nama_brg'          => $item['name'],
                    'jumlah'            => $item['qty'],
                    'harga'             => $item['price']
                );
                $this->db->insert('tb_pesanan', $data);
            }
            return TRUE;
        }

        public function tampil_data()
        {
          $query = $this->db->get('tb_invoice');
          return $query;  
        }

        public function ambil_id_invoice($id)
        {
            $result = $this->db->where('id', $id)->limit(1)->get('tb_invoice');
            if($result->num_rows() > 0){
                return $result->result();
            }else{
                return false;
            }
        }

        public function ambil_id_pesanan($id_invoice)
        {
            $result = $this->db->where('id_invoice', $id_invoice)->get('tb_pesanan');
            if($result->num_rows() > 0){
                return $result->result();
            }else{
                return false;
            }
        }

        public function update()
        {
            $id = $this->input->post('invoice');
        $status = $this->input->post('status');
        $this->db->set('status', $status);
        $this->db->where('id', $id);

        $data = $this->db->update('tb_invoice');
        return $data;
        
        redirect('invoice/index');
        }

        public function ambil_id_customer()
        {
            $id = $this->session->userdata('username');
            $this->db->select('*');
            $this->db->from('tb_invoice');
            $this->db->where('nama', $id);
            $data = $this->db->get();
            return $data;
        }
    }