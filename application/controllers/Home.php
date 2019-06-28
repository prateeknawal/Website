<?php
class Home extends CI_Controller{
	function __construct(){ 
		parent::__construct();
		//$this->check_isvalidated();
	}
	
	public function index(){
		// If the user is validated, then this function will run
	
		$this->load->view('ovp1');
		$this->load->helper('url');

		// Add a link to logout
		//echo '<br /><a href=''.base_url().'home/do_logout'>Logout Fool!</a>';
	}
	
	
 }
 ?>