<?php 

class Dashboard extends CI_Controller{

    public function __construct()
    {
        parent::__construct();

        if($this->session->userdata('role_id') != '2'){
           $this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">
           Anda Belum Login!
           <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
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

    public function detail_keranjang()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('keranjang');
        $this->load->view('templates/footer');
    }

    public function hapus_keranjang()
    {
        $this->cart->destroy();
        redirect('welcome');
    }

    public function pembayaran()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pembayaran');
        $this->load->view('templates/footer');
    }

    public function proses_pesanan()
    {
        $is_processed = $this->model_invoice->index();
        if($is_processed)
        {
            $this->cart->destroy();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('proses_pesanan');
            $this->load->view('templates/footer');
        }else
        {
            echo "Maaf, Pesanan Anda Gagal diproses!";
        }
    }

    public function detail_pesanan()
    {
        $data['invoice'] = $this->model_invoice->ambil_id_customer();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pesanan', $data);
        $this->load->view('templates/footer');
    }

    public function update_jml_keranjang($id)
    {
        $data['produk'] = $this->db->get_where('tb_barang', ['id_brg'=> $id])->row_array();
        $quantity = $this->input->post('qty',true);
        $row_id = $this->input->post('rowid',true);
        $jml_produk = $data['produk']['stok'];
        if($quantity > $jml_produk){
            echo "<script>alert('Kuantitas Melebihi Stok!');</script>";
            echo "<script>window.location='".site_url('dashboard/detail_keranjang')."';</script>";
        }else{
            $data = array(
                'rowid' => $row_id,
                'qty'   => $quantity
            );
            
            $this->cart->update($data);
            return redirect("dashboard/detail_keranjang");
        }
    }

    public function update_cart_quantity_payment($id_brg)
    {
        $data['produk'] = $this->db->get_where('tb_barang', ['id_brg' => $id_brg]);
        $jml_produk = $data['produk']['stok'];
        if('qty' > $jml_produk){
            echo "<div class='alert alert-danger' role='alert'>Kuantitas Melebihi Stok!</div>";
        }else{
            $quantity = $this->input->post('qty',true);
            $row_id   = $this->input->post('rowid',true);
            $data     = array(
                'rowid' => $row_id,
                'qty'   => 0
            );
            $this->cart->update($data);
            return redirect("keranjang");
        }
    }

    public function upload($id)
    {
        $data['invoice'] = $this->model_invoice->ambil_id_invoice($id);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('uploadbukti', $data);
        $this->load->view('templates/footer');
    }
}