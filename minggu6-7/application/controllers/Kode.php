<?php

class Kode extends CI_Controller {

  public function hello($var)
  {
    if (isset($var)) {
      switch (strtolower($var)) {
        case 'php':
          $this->load->view('uriview/phpview');
          break;
        case 'python':
          $this->load->view('uriview/pythonview');
          break;
        case 'cpp':
          $this->load->view('uriview/cppview');
          break;
        case 'java':
          $this->load->view('uriview/javaview');
          break;
        
        default:
          echo 'Input URI salah';
          break;
      }
    } else {
      echo 'Input URI salah';
    }
  }
}