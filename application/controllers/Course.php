<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Course extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

	}

	public function index()
	{
		
		$this->load->model('Course_model');
		$data = $this->Course_model->get_all_course();
		$this->load->view('Course/Course_view' ,$data);
	}
	public function Course_detail()
	{
		$this->load->view('Course/Course_detail');
	}
	public function Course_lession()
	{
		$this->load->view('Course/Course_lession');
	}

}

/* End of file Course.php */
/* Location: ./application/controllers/Course.php */


