<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hello extends CI_Controller {

	public function first($p1){
        $myArray['maths'] = 89;
        $myArray['python'] = $p1;
        $this->load->view('hello_world', $myArray);
        
    }
    public function second(){
        $this->load->view('hello.html');
    }
    public function __construct(){
        parent::__construct();
        echo "This constructor overrides the default constructor.";
    }

    // public function _remap($method){
    //     if($method == "f1")
    //         $this->first();
    //     else
    //         $this->second();
    // }
}