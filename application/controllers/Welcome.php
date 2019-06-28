<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){
		//$this->load->model('MetaData');
		//$data['functions'] = $this->MetaData->getData();
		// die;
		//$this->load->view('sample', $data);	
		$this->load->view('ovp1');
		$this->load->helper('url');
	}

	public function home()
	{
		$this->load->view('public/header');
		$this->load->view('public/landingpage');
	}

	public function about()
	{
		$this->load->view('public/header');
		$this->load->view('public/about');
	}

}
