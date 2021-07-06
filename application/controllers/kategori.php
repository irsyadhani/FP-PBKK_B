<?php

class Kategori extends CI_Controller {
    public function modem()
    {
        $data ['modem'] = $this->model_kategori->
        data_modem()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('modem', $data);
        $this->load->view('templates/footer');
    }

    public function router()
    {
        $data ['router'] = $this->model_kategori->
        data_router()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('router', $data);
        $this->load->view('templates/footer');
    }

    public function laptop()
    {
        $data ['laptop'] = $this->model_kategori->
        data_router()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('laptop', $data);
        $this->load->view('templates/footer');
    }
}
 ?>