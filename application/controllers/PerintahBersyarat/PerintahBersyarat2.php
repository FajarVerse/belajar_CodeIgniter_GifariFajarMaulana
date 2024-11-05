<?php
class PerintahBersyarat2 extends CI_Controller
{
  public function index()
  {
    $data["nim"] = "1111";
    $data["namamhs"] = "ABCD";
    $data["kodejrs"] = "4";

    switch ($data["kodejrs"]) {
      case '1':
        $data["jurusan"] = "Manajemen Informatika";
        break;
      case "2":
        $data["jurusan"] = "Bisnis Digital";
        break;
      case "3":
        $data["jurusan"] = "Administrasi Bisnis";
        break;
      default:
        $data["jurusan"] = "jurusan tidak ditemukan";
        break;
    }

    $this->load->view("PerintahBersyarat/perintahbersyarat2_view", $data);
  }
}
