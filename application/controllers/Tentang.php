<?php
class Tentang extends CI_controller {

    public function index()
    {
        $this->load->view('templates/headerpages');
        $this->load->view('tentang/index');
        $this->load->view('templates/footer');
    }

}