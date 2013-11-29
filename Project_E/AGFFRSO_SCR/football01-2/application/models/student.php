<?php
class Student extends CI_Model {
    var $id = 0;
    var $name = '';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		$this->load->database();
    }
	
	function findByAll()
	{
		return $this->db->get('student');
		
	}
	
	
	function add()
	{
		$this->db->insert('student',$this);
		
	}
	
	
	
	
    function setId($id)
    {
      $this->id = $id;
    }
    function getId()
    {
      return $this->id;
    }
    
    function setName($name)
    {
      $this->name = $name;
    }
    function getName()
    {
      return $this->name;
    }
   }
?>