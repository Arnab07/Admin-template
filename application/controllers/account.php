<?php

class account extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('insert_model');
    }
    function index()
    {
        $this->load->view('index');
      
       
    }
    function fees()
    {
    	$this->load->view('fees');
    }
     function result()
    {
        $this->load->view('search_results');
    }
    function dashboard()
    {
    	$this->load->view('dashboard');
    }
    function teacher()
    {
        $this->load->view('teacher');
    }
    function t_result()
    {
        $this->load->view('teacher_results');
    }
    function invoice()
    {
        $this->load->view('invoice');
    }
    }
      
?>