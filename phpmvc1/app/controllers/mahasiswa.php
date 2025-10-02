<?php

class mahasiswa extends Controller {
    public function index()
    {
       $data['judul'] = 'mahasiswa';
       $this->view('templates/header', $data);
       $this->view('mahasiswa/index');
       $this->view('templates/footer');
    }
}