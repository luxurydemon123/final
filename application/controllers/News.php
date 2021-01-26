<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller {
	private $soluongtin1trang;
	public function __construct()

	{
		parent::__construct();
		$this->load->model('News_model');
		$this->soluongtin1trang = 3 ;
	}

	public function index()
	{
		
		$dl = $this->News_model->loadDanhSachTin2($this->$soluongtin1trang);
		$sotrang = $this->News_model->soTrang($this->$soluongtin1trang);
		$category = $this->News_model->loadDanhsach();
		$mangdl = array(
			'dulieutin'=> $dl,
			'sotrang'=>$sotrang,
			'cacdanhmuc'=>$category
		);
		
		$this->load->view('News_view',$mangdl);
	}
	public function page($trang)
	{
		# code...echo $page;
		// trinh vi tri
		
		
		$dl = $this->News_model->loadTinTheoTrang($trang, $this->soluongtin1trang);
		$sotrang = $this->News_model->soTrang($this->soluongtin1trang);
		$category = $this->News_model->loadDanhsach();
		$mangdl = array(
			'dulieutin'=> $dl,
			'sotrang'=>$sotrang,
			'cacdanhmuc' =>$category
		);
		$this->load->view('News_view',$mangdl);

		
		
		

		
	}
	public function News_detail($idNews)
	{
		$data = $this->News_model->getNewsById($idNews);
		$category = $this->News_model->loadDanhsach();
		$data = array('dulieutin' => $data, 'cacdanhmuc' =>$category);
		$this->load->view('News_Details',$data , FALSE);
	}
	public function danhmuc($idDanhMuc)
	{
		$dl = $this->News_model->loadNews($this->$soluongtin1trang,$idDanhMuc);
		echo "<pre>";
		var_dump($dl);
		echo "</pre>";
		die();

		
		$sotrang = $this->News_model->soTrang($this->$soluongtin1trang);
		$category = $this->News_model->loadDanhsach();
		$mangdl = array(
			'dulieutin'=> $dl,
			'sotrang'=>$sotrang,
			'cacdanhmuc'=>$category
		);
		
		$this->load->view('News_view',$mangdl);
	}
}

/* End of file News.php */
/* Location: ./application/controllers/News.php */