<?php
class OperasiMatematika extends CI_Controller
{
    public function  index()
    {
        $data["nilai1"] = 10;
        $data["nilai2"] = 7;

        $data["perkalian"] = $data["nilai1"] * $data["nilai2"];
        $data["pengurangan"] = $data["nilai1"] - $data["nilai2"];

        $this->load->view("operasimatematika_view", $data);
    }
}
