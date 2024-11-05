<?php
    class PerhitunganLingkaran extends CI_Controller{
        public function index(){
            $data["r"] = 10;
            $data["phi"] = 3.14;

            $data["keliling"] = 2 * $data["phi"] * $data["r"];
            $data["luas"] = $data["phi"] * $data["r"] * $data["r"];

            $this -> load->view("lingkaran_view", $data);
        }
    }
?>