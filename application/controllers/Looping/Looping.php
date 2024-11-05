<?php
class Looping extends CI_Controller
{
  public function index()
  {
    $data["items"] = ["Apel", "Jeruk", "Manggga", "Pisang"];
    $this->load->view("Looping/looping_view", $data);
  }
}
