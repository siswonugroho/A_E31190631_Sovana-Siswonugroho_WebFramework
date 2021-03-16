<?php

class Kode1 extends CI_Controller {

  public function index()
  {
    $this->load->view('uriview/phpview');
  }
  public function hello_python()
  {
    $this->load->view('uriview/pythonview');
  }
  public function hello_cpp()
  {
    $this->load->view('uriview/cppview');
  }
  public function hello_java()
  {
    $this->load->view('uriview/javaview');
  }
  public function __remap($var)
  {
    if (isset($var)) {
      switch (strtolower($var)) {
        case 'python':
          $this->hello_python();
          break;
        case 'cpp':
          $this->hello_cpp();
          break;
        case 'java':
          $this->hello_java();
          break;
        default:
          $this->index();
          break;
      }
    } else {
      $this->index();
    }
  }

}