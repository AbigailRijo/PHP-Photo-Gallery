<?php

session_start();

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    # code...
     $metodo = $this->router->fetch_method();

     if (!isset($_SESSION['gale_user']) && $metodo != 'login') {
       # code...
       redirect('admin/login');
     }
  }

  function index()
  {
    # code...
    $this->load->view('admin/inicio');
  }

  function login()
  {
    # code...
    $this->load->view('admin/login');
  }

  function salir()
  {
    unset($_SESSION['gale_user']);
    redirect('admin/login');
  }
}


 ?>
