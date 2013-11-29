<?php
class Student extends CI_Model {
    var $id = 0;
    var $name = '';
	var $lastname = '';
	var $studentNumber = '';
	var $mobileNumber = '';
	var $birthdate = '';
	
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
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
	
	 function setLastname($lastname)
    {
      $this->lastname = $lastname;
    }
    function getLastname()
    {
      return $this->lastname;
    }
	
	 function setStudentNumber($studentNumber)
    {
      $this->studentNumber = $studentNumber;
    }
    function getStudentNumber()
    {
      return $this->studentNumber;
    }
	
	function setMobileNumber($mobileNumber)
    {
      $this->mobileNumber = $mobileNumber;
    }
    function getMobileNumber()
    {
      return $this->mobileNumber;
	}
	
	function setBirthdate($birthdate)
    {
      $this->birthdate = $birthdate;
    }
    function getBirthdate()
    {
      return $this->birthdate;
	}
   }
?>