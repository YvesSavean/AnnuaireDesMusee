<?php

class musee
{
	private $_id;
	private $_nom;
	private $_ville;
	private $_pays;
	private $_nbVisiteur;
	private $_description;

	
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
	
	public function getNom()
	{
		return $this->_nom;
	}
	
	public function setNom($nom)
	{
		$this->_nom=$nom;
	}
	
	public function getville()
	{
		return $this->_ville;
	}
	
	public function setville($ville)
	{
		$this->_ville=$ville;
	}
	
	public function getpays()
	{
		return $this->_pays;
	}
	
	public function setPays($pays)
	{
		$this->_pays=$pays;
	}
	
	public function getNbVisiteur()
	{
		return $this->_nbVisiteur;
	}
	
	public function setNbVisiteur($nbVisiteur)
	{
		$this->_nbVisiteur=$nbVisiteur;
	}
	
	public function getDescription()
	{
		return $this->_description;
	}
	
	public function setDescription($description)
	{
		$this->_description = $description;
	}
}
