<?php
class FormPenjumlahan extends CI_Controller
{
  public function index()
  {
    $this->load->view("Form/penjumlahan/v_perhitungan");
  }

  public function jumlah()
  {
    $data["n1"] = (int)$this->input->post("nilai1");
    $data["n2"] = (int)$this->input->post("nilai2");
    $data["hasil"] = $data["n1"] + $data["n2"];
    $this->load->view("Form/penjumlahan/v_hasil", $data);
  }
}
