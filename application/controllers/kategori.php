<?php
    class Kategori extends CI_Controller{

    public function arlen_tops()
    {
        $data['arlentops'] = $this->model_kategori->data_arlen_tops()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('arlentops', $data);
        $this->load->view('templates/footer');
    }

    public function arlen_gamis()
    {
        $data['arlengamis'] = $this->model_kategori->data_arlen_gamis()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('arlengamis', $data);
        $this->load->view('templates/footer');
    }

    public function arlen_bottom()
    {
        $data['arlenbottom'] = $this->model_kategori->data_arlen_bottom()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('arlenbottom', $data);
        $this->load->view('templates/footer');
    }
}