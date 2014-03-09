<?php

class catalogue
{
	private $_id;
	private $_libelle;
	private $_lesFiches;


	public function __construct()
	{
	}


	public function getId()
	{
		return $this->_id;
	}

	public function setId($id)
	{
		$this->_id = $id;
	}
	
	public function getLibelle()
	{
		return $this->_libelle;
	}
	
	public function setLibelle($libelle)
	{
		$this->_libelle = $libelle;
	}
	

	public function getLesFiches()
	{
		return $this->_lesFiches;
	}
	
	public function setLesFiches($lesFiches)
	{
		$this->_lesFiches[]=$lesFiches;
	}

}
