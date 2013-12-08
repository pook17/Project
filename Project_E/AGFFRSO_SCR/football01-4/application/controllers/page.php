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
	function __construct() {
       parent::__construct();
	   $this->load->helper('url');
   }
	public function index()
	{
		
		$this->load->view('header');
		$this->load->view('home1');
		$this->load->view('footer');
	}	
	
	public function home1()  //หน้าหลัก//
	{
		$this->load->view('header');
		$this->load->view('home1');
		$this->load->view('footer');
	}
	
	
	
	public function register()  //หน้าสมัครสมาชิก//
	{
		$this->load->view('header');
		$this->load->view('register');
		$this->load->view('footer');
	}
	
	
		public function how()  //วิธีการใช้บริการ //
	{
		$this->load->view('header');
		$this->load->view('how');
		$this->load->view('footer');
	}
	
	
		public function repayment()  //แจ้งการชำระเงิน //
	{
		$this->load->view('header');
		$this->load->view('repayment');
		$this->load->view('footer');
	}
	
	
		public function contact()  // ติดต้อเรา  //
	{
		$this->load->view('header');
		$this->load->view('contact');
		$this->load->view('footer');
	}
	
	
	/*public function page2()
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
		
	}*/


//@@@@@ ผู้ดูแลระบบ @@@@@//

	public function managementFooball()   //จัดการสนามฟุตบอล//
	{
		$this->load->view('header');
		$this->load->view('managementFooball');
		$this->load->view('footer');
	}
	
	public function managenew()       //จัดการข่าวประชาสัมพันธ์//
	{
		$this->load->view('header');
		$this->load->view('managenew');
		$this->load->view('footer');
	}
	
	public function listc()       // จัดการสมาชิก //
	{
		$this->load->view('header');
		$this->load->view('listc');
		$this->load->view('footer');
	}
	
	
	public function managebank()       // จัดการสมาชิก // 
	{
		$this->load->view('header');
		$this->load->view('managebank');
		$this->load->view('footer');
	}
	
	
	public function allbook()       // รายงานการจอง //     
	{
		$this->load->view('header');
		$this->load->view('allbook');
		$this->load->view('footer');
	}
	
	public function allpay()       // รายงานแจ้งชำระเงิน //     
	{
		$this->load->view('header');
		$this->load->view('allpay');
		$this->load->view('footer');
	}
	
	public function report()       // สรุปยอดรายรับ //     
	{
		$this->load->view('header');
		$this->load->view('report');
		$this->load->view('footer');
	}
	
	public function logout()       // ออกจากระบบ //     
	{
		$this->load->view('header');
		$this->load->view('logout');
		$this->load->view('footer');
	}
	

//@@@@@ ลูกค้า @@@@@//

	public function editprofile()       // เปลี่ยนข้อมูลส่วนตัว //     
	{
		$this->load->view('header');
		$this->load->view('editprofile');
		$this->load->view('footer');
	}
	
		public function myhis()       // ประวัติการจองสนามฟุตบอลหญ้าเทียม //     
	{
		$this->load->view('header');
		$this->load->view('myhis');
		$this->load->view('footer');
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */