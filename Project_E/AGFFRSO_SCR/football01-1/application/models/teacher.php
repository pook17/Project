<?php
class Teacher extends CI_Model {
    var $t_id = 0;
    var $t_name = '';
	var $t_tel = 0;

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		$this->load->database();
    }
	
	function findByAll()
	{
		return $this->db->get('teacher');
		
	}
	
	
	function add()
	{
		$this->db->insert('teacher',$this);
		
	}
	
	
    function setId($t_id)
    {
      $this->t_id = $t_id;
    }
    function getId()
    {
      return $this->t_id;
    }
    
	
	
    function setName($t_name)
    {
      $this->t_name = $t_name;
    }
    function getName()
    {
      return $this->t_name;
    }
	
	
	
	function setTel($t_tel)
    {
      $this->t_tel = $t_tel;
    }
    function getTel()
    {
      return $this->t_tel;
    }
   }
?>