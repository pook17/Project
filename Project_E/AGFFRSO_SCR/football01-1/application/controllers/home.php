<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

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
		$this->load->model('Student');
		
		$this->Student->setId('1221');
		$data['id'] = $this->Student->getId();
		
		$this->Student->setName('kowit01');
		$data['name'] = $this->Student->getName();
		
		$this->Student->add();
		
		
		
		
		$this->load->model('Teacher');
		
		$this->Teacher->setId('1212');
		$data['t_id'] = $this->Teacher->getId();
		
		$this->Teacher->setName('kaewkomol');
		$data['t_name'] = $this->Teacher->getName();
		
		$this->Teacher->setTel('1111111111');
		$data['t_tel'] = $this->Teacher->getTel();
		
		$this->Teacher->add();
		
		
		$this->load->view('foot01', $data);
		
	}
	
	public function b($name, $age, $sex)
	{
		$data['fruit'] = array('apple','mango','banana');
		
		//asort($data['fruit']);
		
		$data['ans'] = 5*6;
		$data['name'] = $name;
		$data['age'] = $age;
		$data['sex'] = $sex;

		$this->load->view('welcome_message',$data);
		
	}	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */