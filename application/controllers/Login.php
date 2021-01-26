<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		
	}

	public function index()
	{
		$this->load->view('login_view');
		
	}
	public function signin()
	{
		$this->load->view('login_view');

		# code...
		//get data login
		$username = $this->input->post('username-new');
		$password = $this->input->post('password-new');

		//senđ data to model
		$this->load->model('login_model');
		$this->login_model->getMember($username,$password);
		if ($this->login_model->getMember($username,$password) == '1') {
			# code...
			//create session for users
			$this->session->set_userdata('usermember' , $username);

			redirect('http://localhost:8888/Project2/Login/user','refresh');

		}
		else{
			echo "thất bại";
		}

	}
	public function signup()
	{
		# code...
		$this->load->view('login_view');
		//get data from page login_view
		$username_new = $this->input->post('username-new');
		$email_new = $this->input->post('email-new');
		$password_new = $this->input->post('password-new');
		$repassword_new = $this->input->post('repassword-new');


		// send data to model
		$this->load->model('login_model');
		$this->login_model->addMember($username_new , $email_new , $password_new, $repassword_new);
	}
	public function user()
	{
		# code...
		// page user
		//Check if the session exists before turning the page
		if ($this->session->userdata('usermember')){
			# code...
			$this->load->view('user/user_view');
		}else{
			redirect('http://localhost:8888/Project2/','refresh');

		}

		
	}
	public function logout($value='')
	{
		# code...
		if ($this->session->userdata('usermember')) {
			# code...
			//cancel session
			$this->session->unset_userdata('usermember');
			redirect('http://localhost:8888/Project2/','refresh');
		}
		//Page log out
	}

	

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */