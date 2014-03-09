<?php
	require_once '../Bean/musee.class.php';
	require_once '../Bean/catalogue.class.php';

	function ouvrir_base()
	{
		$base= mysql_connect('localhost', 'root', '');
		if(!$base) die("Could not connect");
		mysql_select_db('db_annu',$base);
		return $base;
	}
	
	function PDO_ouvrir_base()
	{
		$pst=new PDO("mysql:host=localhost;dbname=db_annu;","root","");
		return $pst;
	}
	
	
	function fermer_base($base)
	{
		mysql_close($base);
	}
	
	function insererFiche($unMusee,$idCatalogue)
	{
		$laBase= PDO_ouvrir_base();
		
		$larequete='select nom from musee where nom="'.$unMusee->getNom();
		$req= $laBase->prepare($larequete);
		$req->execute();
		$nomMusee=$req->fetch();
		
		if($nomMusee==false)
		{	
			$req = $laBase->prepare('Insert into musee(nom,ville,pays,nbVisiteur,description) values(:nom, :ville, :pays, :nbVisiteur,:description)');
			$req->execute(array(
					'nom' => $unMusee->getNom(),
					'ville' => $unMusee->getville(),
					'pays' => $unMusee->getpays(),
					'nbVisiteur' =>$unMusee->getNbVisiteur(),
					'description' =>$unMusee->getDescription(),
			));
		}
		$larequete='select id from musee where nom="'.$unMusee->getNom().'" and ville="'.$unMusee->getville().'" and pays="'.$unMusee->getpays().'" and nbVisiteur='.$unMusee->getNbVisiteur();
		$req= $laBase->prepare($larequete);
		$req->execute();
		$idMusee=$req->fetch();
		$req = $laBase->prepare('Insert into possede values(:idFiche, :idCatalogue)');
		$req->execute(array(
				'idFiche' => $idMusee['id'],
				'idCatalogue' => $idCatalogue,
		));
	}
	
	function insererCatalogue($unCatalogue)
	{
		$laBase= PDO_ouvrir_base();
		$req = $laBase->prepare('Insert into catalogue(libelle) values(:libelle)');
		$req->execute(array(
				'libelle' => $unCatalogue->getLibelle(),
		));
	}
	
	function supprimerFiche($id)
	{
		$laBase = ouvrir_base();
		mysql_query('DELETE from possede where id_Fiche ='.$id,$laBase);
		mysql_query('DELETE from musee where id ='.$id,$laBase);
		fermer_base($laBase);
	}
	
	function supprimerCatalogue($id)
	{
		$laBase = ouvrir_base();
		mysql_query('DELETE from possede where Id_catalogue ='.$id,$laBase);
		mysql_query('DELETE from musee where id not in(select Id_Fiche from possede)',$laBase);
		mysql_query('DELETE from catalogue where id ='.$id,$laBase);
		fermer_base($laBase);
	}
	
	function getCatalogue(){
		$laBase = ouvrir_base();
		$result = mysql_query('select id,libelle from catalogue',$laBase);
		$catalogueArray = array();
		while ($row = mysql_fetch_assoc($result)) {
			$catalogue= new catalogue();
			$catalogue->setId($row['id']);
			$catalogue->setLibelle($row['libelle']);
			$musees = getMuseeCatalogue($catalogue->getId());
			$catalogue->setLesFiches($musees);
			$catalogueArray[]=$catalogue;
		}
		fermer_base($laBase);
		return $catalogueArray;
	}
	
	function getUnCatalogue($id){
		$laBase = ouvrir_base();
		$result = mysql_query('select id,libelle from catalogue where id='.$id,$laBase);
		$row = mysql_fetch_array($result);
		$catalogue= new catalogue();
		$catalogue->setId($row['id']);
		$catalogue->setLibelle($row['libelle']);
		$musees = getMuseeCatalogue($catalogue->getId());
		$catalogue->setLesFiches($musees);
		fermer_base($laBase);
		return $catalogue;
	}
	
	function getMusees()
	{
		$laBase = ouvrir_base();
		$result = mysql_query('select id,nom,ville,pays,nbVisiteu,description from musee',$laBase);
		$musees = array();
		while ($row = mysql_fetch_assoc($result)) {
			$musees[] = creerMusee($row);
		}
		fermer_base($laBase);
		return $musees;
	}
	
	function creerMusee($row)
	{
		$unMusee = new musee();
		$unMusee->setId($row["id"]);
		$unMusee->setNom($row["nom"]);
		$unMusee->setVille($row["ville"]);
		$unMusee->setPays($row["pays"]);
		$unMusee->setnbVisiteur($row["nbVisiteur"]);
		$unMusee->setDescription($row["description"]);
		return $unMusee;
	}
	
	function getMusee($id)
	{
		$laBase = ouvrir_base();
		$result = mysql_query('select id,nom,ville,pays,nbVisiteur,description from musee where id ='.$id,$laBase);
		$row = mysql_fetch_array($result);
		fermer_base($laBase); 
		return creerMusee($row);
	}
	
	function getMuseeCatalogue($id)
	{
		$laBase = ouvrir_base();
		$result = mysql_query('select musee.id,nom,ville,pays,nbVisiteur,description from musee,catalogue,possede where musee.id = possede.Id_Fiche and possede.Id_catalogue= catalogue.id and catalogue.id='.$id,$laBase);
		$musees = array();
		while ($row = mysql_fetch_assoc($result)) {
			$musees[] = creerMusee($row);
		};
		return $musees;
	}
	
	function setVille($nomVille,$id)
	{
		$laBase = ouvrir_base();
		mysql_query('UPDATE musee SET ville="'.$nomVille.'" WHERE id ='.$id,$laBase);
		fermer_base($laBase);
	}
	
	function getVille($id)
	{
		$laBase = ouvrir_base();
		$result = mysql_query('select ville from musee where id ='.$id,$laBase);
		$row = mysql_fetch_array($result);
		return $row;
	}
	
	function setNom($nomMusee,$id)
	{
		$laBase = ouvrir_base();
		mysql_query('UPDATE musee SET nom="'.$nomMusee.'" WHERE id ='.$id,$laBase);
	}
	
	function getNom($id)
	{
		$laBase = ouvrir_base();
		$result = mysql_query('select nom from musee where id ='.$id,$laBase);
		$row = mysql_fetch_array($result);
		return $row;
	}
	
	function setPays($nomPays,$id)
	{
		$laBase = ouvrir_base();
		mysql_query('UPDATE musee SET pays="'.$nomPays.'" WHERE id ='.$id,$laBase);
		fermer_base($laBase);
	}
	
	function getPays($id)
	{
		$laBase = ouvrir_base();
		$result = mysql_query('select pays from musee where id ='.$id,$laBase);
		$row = mysql_fetch_array($result);
		return $row;
	}
	
	function setNbVisiteur($nb,$id)
	{
		$laBase = ouvrir_base();
		mysql_query('UPDATE musee SET nbVisiteur="'.$nb.'" WHERE id ='.$id,$laBase);
		fermer_base($laBase);
	}
	
	function getNbVisiteur($id)
	{
		$laBase = ouvrir_base();
		$result = mysql_query('select nbVisiteur from musee where id ='.$id,$laBase);
		$row = mysql_fetch_array($result);
		return $row;
	}
	
	function setDescription($description,$id)
	{
		$laBase = ouvrir_base();
		mysql_query('UPDATE musee SET description="'.$description.'" WHERE id ='.$id,$laBase);
		fermer_base($laBase);
	}
	
	function getDescription($id)
	{
		$laBase = ouvrir_base();
		$result = mysql_query('select description from musee where id ='.$id,$laBase);
		$row = mysql_fetch_array($result);
		return $row;
	}
	
	
?>
