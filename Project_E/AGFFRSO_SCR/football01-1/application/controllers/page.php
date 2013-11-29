<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('header');
		$this->load->view('vw_home');
		$this->load->view('footer');
		
	}	
	public function page2()
	{
		$this->load->model('student');
		
		$data['student'] = $this->student->findByAll();
		
		
		$this->load->view('header');
		$this->load->view('vw_home2',$data);
		$this->load->view('footer');
		
	}	
	
	
	public function page3()
	{
		$this->load->model('teacher');
		
		$data['teacher'] = $this->teacher->findByAll();
		
		
		$this->load->view('header');
		$this->load->view('vw_home3',$data);
		$this->load->view('footer');
		
	}	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */