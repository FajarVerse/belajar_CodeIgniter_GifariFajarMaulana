<?php
class Penjumlahan2 extends CI_Controller
{
    public function index()
    {
        $data["nilai1"] =  10;
        $data["nilai2"] = 20;
        $data["hasil"] = $data["nilai1"] + $data["nilai2"];

        $this->load->view("penjumlahan2_view", $data);
    }
}
