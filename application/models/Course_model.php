<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Course_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function get_new_course()
	{
		# code...
		$this->db->select('*');
		$this->db->order_by('date_upload', 'desc');
		$query = $this->db->get('course', 3);
		$result = $query->result_array();
		$result = array('data_course' => $result );
		return $result;
	}
	public function get_all_course()
	{
		# code...
		$this->db->select('*');
		$query = $this->db->get('course_new');
		$result = $query->result_array();
		$result = array('course_new' => $result );
		return $result;
		
	}

}

/* End of file Course.php */
/* Location: ./application/models/Course.php */