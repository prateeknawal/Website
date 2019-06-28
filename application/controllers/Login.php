<?php
class Login extends CI_Controller{
	public function __construct(){
		parent::__construct();
	

	}
	public function index($msg = NULL){
		$data['msg'] = $msg;
		$this->load->view('login_view', $data);
		

	}
	public function process(){
		/*$this->load->model('Login_model');
		$result = $this->Login_model->validate();*/
		//echo $result;

		$user = $this->input->post('username');
		$password = $this->input->post('password');

		if($user=="admin"&&$password=="admin"){
			redirect('Home');
		}
		else {
			echo "ur out..";
			

		}

			
	}

	public function showdata(){

		$dt['alldata']=$this->db->query('SELECT * from details')->result_array();

		$this->load->view("show_data",$dt);
	}

	public function logout(){
		//echo "ur out....";
		redirect('Login');
	}

}