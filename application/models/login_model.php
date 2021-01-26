<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		
	}
	public function addMember($user_new , $email_new , $password_new, $repassword_new)
	{
		# code...
		//Check if the username exists?
		$this->db->where('username_new', $user_new);
		$userexits = $this->db->get('signup')->num_rows();
		//check password matches
		if ($password_new != $repassword_new) {
			# code...
			echo "<span style ='color:red'>Passwords do not match! Please re-register</span>";
		} else if ($userexits == '0') 
			# code...
		{
			$object = array('username_new' => $user_new , 'email_new' => $email_new, 'password_new' => $password_new, 'repassword_new' => $repassword_new );
			$this->db->insert('signup', $object);
		}else{
			echo  "<span style= 'color: red'><h3>User already exists! Please re-enter <i class='fas fa-frown-open'></i></h3></span>";
		}

	}
	public function getMember($username , $password)
	{
		# code...
		$this->db->where('username_new', $username);
		$this->db->where('password_new', $password);
		$dem = $this->db->get('signup')->num_rows();
		return $dem;

	}

}

/* End of file login_model.php */
/* Location: ./application/models/login_model.php */