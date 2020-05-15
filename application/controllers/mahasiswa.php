<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
  public function index()
  {
    $data['judul'] = 'Halaman Home';
    $this->load->view('templates/header', $data);
    $this->load->view('mahasiswa/index');
    $this->load->view('templates/footer');
  }

  public function daftar()
  {
    $data['judul'] = 'Halaman Daftar Mahasiswa';

    $data['mahasiswa'] = $this->db->get("mahasiswa")->result_array();

    $this->load->view('templates/header', $data);
    $this->load->view('mahasiswa/daftar', $data);
    $this->load->view('templates/footer');
  }

  public function tambah()
  {
    $data['judul'] = 'Halaman Tambah Mahasiwa';

    $this->load->view('templates/header', $data);
    $this->load->view('mahasiswa/tambah');
    $this->load->view('templates/footer');
  }
}
