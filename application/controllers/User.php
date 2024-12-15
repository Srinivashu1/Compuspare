<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public $log;
    public $utf8;
    public $uri;
    public $router;
    public $exceptions;
    public $output;
    public $security;
    public $input;
    public $session; 
    public $lang;
	public $hooks;
	public $benchmark; // Declare the property
    public $db;
    public $modeldata;
    public $modeldataval; 

    public $config; // Declare the config property

    public function _construct() {
        parent::__construct(); 
        $this->load->model('modeldataval');// Call the parent constructor if needed
        $this->config = []; // Initialize config
    }
   

	
	public function index()
	{	
		$this->load->helper('url');
		$this->load->model('modeldataval');
		$data['slide']=$this->modeldataval->get_last_row();
        $data['services']=$this->modeldataval->seviceinsertshow();
        $data['support']=$this->modeldataval->supportinsertshow();
        $data['gallery']=$this->modeldataval->galleryinsertshow();
        $data['apply']=$this->modeldataval->applyinsertshow();
        $data['engineers']=$this->modeldataval->engineersinsertshow();
        $data['brand']=$this->modeldataval->brandinsertshow();
        $this->load->view('user/home',$data);
	
	}
    
    

    

}