<?php
class FormGaji extends CI_Controller
{
  public function index()
  {
    $this->load->view("Latihan/FormGaji/v_Form");
  }
  public function CalculationGaji()
  {
    $data["nama"] = $this->input->post("nama_pegawai");
    $data["gp"] = $this->input->post("gaji_pokok");
    $data["jml_ank"] = $this->input->post("jml_anak");
    $data["tj_anak"] = $data["gp"] * (10 / 100) * $data["jml_ank"];
    $data["tj_istri"] = $data["gp"] * (5 / 100);
    $data["tj_beras"] = (2 + $data["jml_ank"]) * 25000;
    $data["gk"] = $data["gp"] + $data["tj_anak"] + $data["tj_istri"] + $data["tj_beras"];

    $this->load->view("Latihan/FormGaji/v_hasil", $data);
  }
}
