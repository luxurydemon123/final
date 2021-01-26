<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require('mail/PHPMailer.php');
require('mail/SMTP.php');
require('mail/POP3.php');

class Home extends CI_Controller {

	public function __construct()
	{
		
	}
	// List all course

	public function index( $offset = 0 )
	{
		
		parent::__construct();
		$this->load->model('admin/Slides_model');
		$dl = $this->Slides_model->getdataSlide();
		$dl = array('mangdl' => $dl );
		$this->load->view('index', $dl);
		
	}
	public function getNewCourse()
	{
		# code...
		$this->load->model('Course');
		$data = $this->Course->get_new_course();
		$this->load->view('index' , $data );

	}

	
	


}
