<?php
class PerintahBersyarat1 extends CI_Controller
{
    public function index()
    {
        // Input variabel
        $data["namapembeli"] = "ABCD";
        $data["kodebarang"] = "KB02";
        $data["banyakbarang"] = 2;

        // Menentukan nama barang dan harga berdasarkan kode barang
        if ($data["kodebarang"] == "KB01") {
            $data["namabarang"] = "Mouse";
            $data["hargabarang"] = 100000;
        } else if ($data["kodebarang"] == "KB02") {
            $data["namabarang"] = "Keyboard";
            $data["hargabarang"] = 200000;
        } else {
            $data["namabarang"] = "Tidak Di ketahui";
            $data["Hargabarang"] = 0;
        }

        // Menghitung jumlah bayar
        $data["jumlahbayar"] = $data["banyakbarang"] * $data["hargabarang"];

        // Menghitung Jumlah
        $this->load->view("perintahbersyarat/perintahbersyarat1_view", $data);
    }
}
