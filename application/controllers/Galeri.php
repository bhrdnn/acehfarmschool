<?php
class Galeri extends CI_controller {

    public function index()
    {
        $this->load->view('templates/headerpages');
        $this->load->view('galeri/index');
        $this->load->view('templates/footer');
    }

}