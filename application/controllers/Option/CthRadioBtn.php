<?php
class CthRadioBtn extends CI_Controller
{
  public function index()
  {
    $data['title'] = 'Form Data Mahasiswa';
    $this->load->view('option/v_cthradiobtn');
  }
}
