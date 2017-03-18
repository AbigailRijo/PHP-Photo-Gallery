<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class Web extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    # code...
  }

  function index()
  {
    # code...
    $this->load->view('inicio');
  }

  function about()
  {
    # code...
    $this->load->view('about');
  }

  function ver_foto($cod=0){
    if ($cod == 0) {
      # code...
      redirect('web');
    }
    $d= array();
    $d['cod'] = $cod;
    $this->load->view('ver_foto', $d);

  }
}


 ?>
