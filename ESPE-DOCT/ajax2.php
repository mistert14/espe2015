<?php

require_once("bootstrap.php");
require_once("load_data.php");
require_once("functions.inc.php");

if ($_GET) {
	extract($_GET);
	//action list_groupe, groupe 33, secret MrT
	if ($secret != 'MrT') {
		$result['code'] = 'credentials!';
        die(json_encode($result));
	}
	if ($action == 'delete_tutor'){
	  $id = explode('_',$id)[1];
	  $tut = $tutorRep->find($id);
	  $em->remove($tut);
	  $em->flush();
	  list_tutors();
	  die(json_encode($result));
	}

	if ($action == 'list_tutors'){
	  list_tutors();
	  die(json_encode($result));
	}
	if ($action == 'set_tutors'){
	//etudiant, formateur,m2,pemf
	$etudiants = $tutorRep->findByIdStudent($etudiant);

	  if (count($etudiants) == 0) {
		$tuto = new Tutorat();
		$tuto->SetIdStudent($etudiant);
		$tuto->SetIdPemf($pemf);
		$tuto->SetIdFormateur($formateur);
		$tuto->SetMaster2($m2);
		$em->persist($tuto);
		$em->flush();
	  }
	  list_tutors();
	  die(json_encode($result));
	}

	if ($action == 'list_groupe'){
		$etudiants = $etuRep->findByIdGroupe($groupe);
		foreach ($etudiants as $etud) {
		  $grp = $grpRep->Find($etud->getIdGroupe());
		  $result['code'][] = array(
			'id' => utf8_encode($etud->getId()),
			'titre' => utf8_encode($etud->getTitre()),
			'nom' => utf8_encode($etud->getNom()),
			'marital' => utf8_encode($etud->getMarital()),
			'prenom' => utf8_encode($etud->getPrenom()),
			'groupe' => utf8_encode($grp->getGroupe()),
			'tp' => utf8_encode($etud->getTp()),
			);
		}
		//patch sur le nom des groupes englobants	
		if (count($etudiants) == 0){
			complex_group($connection, $groupe);			
		}
			
		die(json_encode($result));
	}
    //FIN LIST_GROUPE	
	if ($action == 'list_stage'){
	  maj_stage('*');
	  die(json_encode($result));
	}
	if ($action == 'delete_stage'){
		$stage = $stageRep->find($id);
		$em->remove($stage);
		$em->flush();
		maj_stage('*');
		die(json_encode($result));
	}
	if ($action == 'add_stage'){
		/* action, etudiant, mat_pemf, stage,type_encadrant
		*/
		$nb = $stageRep->findBy(array('idStage' => $stage, 'idMat' => $mat_pemf));
		if (count($nb) < 2) {
			$nb2 = $stageRep->findBy(array('idStage' => $stage,'idStudent' => $etudiant));
			if (count($nb2) == 0) {			  
			  $stg = new Stagem1s1();
			  $stg->setIdStage($stage);
			  $stg->setIdMat($mat_pemf);
			  $stg->setIdStudent($etudiant);
			  $stg->setMatPemf($type_encadrant);
			  $info = $stageDateRep->find($stage);
			  $gr = $grpRep->find($info->getIdGroupe());
			  $stg->setRemarque('Stage des '.$gr->getGroupe().' du '.$info->getDu().' au '.$info->getAu());
			  $em->persist($stg);
			  $em->flush();			  
			}            
		}
		maj_stage($stage);
		die(json_encode($result));
	}
    if ($action == 'list_ue'){
    //action list_ue bloc * cours M2A discipline 3 semestre 1
	  pretty_sql($connection, $cours,$bloc,$semestre,$discipline);
	  die(json_encode($result));
    }	
    if ($action == "list_city") {
		
		$sql = "SELECT id, nom, code_postal FROM distances WHERE nom LIKE '%".$ville."%' OR code_postal LIKE '%".$ville."%' LIMIT 20";
	    $statement = $connection->prepare($sql);
        $statement->execute();
        $res = $statement->fetchAll();
		
		$flux = "";
		foreach($res as $data) {
		    $info = $data["nom"]."(".$data["code_postal"].")_".$data["id"];
            $flux .= "<div id=\"ville1_".$data['id']."\" info=\"".$info."\" class=\"city_item\">";
            $flux .= $info;
            $flux .= "</div>";
		}
		
		die(utf8_encode($flux));
	}
	if ($action == "calc_dist") {
		
		$infos = explode("_",$ville1);
		$id_ville1 = $infos[1];
		$infos = explode("_",$ville2);
		$id_ville2 = $infos[1];
		
		$results = array();
		
		$sql = "SELECT nom, longitude_radian, latitude_radian FROM distances WHERE id = '".$id_ville1."' LIMIT 1";
		$statement = $connection->prepare($sql);
        $statement->execute();
        $res = $statement->fetchAll();
		foreach($res as $data){ 
		  $longA = $data["longitude_radian"];
		  $latA = $data["latitude_radian"];
		  $nomA = $data["nom"];
		
		  $results['ville1']['latitude'] = $latA;
		  $results['ville1']['longitude'] = $longA;
		  $results['ville1']['nom'] = utf8_encode($nomA);
		
		  $sql = "SELECT nom, longitude_radian, latitude_radian FROM distances WHERE id = '".$id_ville2."' LIMIT 1";
		  $statement = $connection->prepare($sql);
          $statement->execute();
          $res = $statement->fetchAll();
		  $data = $res[0];
		  $longB = $data["longitude_radian"];
		  $latB = $data["latitude_radian"];
		  $nomB = $data["nom"];
		
		  $results['ville2']['latitude'] = $latB;
		  $results['ville2']['longitude'] = $longB;
		  $results['ville2']['nom'] = utf8_encode($nomB);
		
          $dist = 6371*acos(cos($latA)*cos($latB)*cos($longB-$longA)+sin($latA)*sin($latB));
          $results['distance'] = $dist;
		}  
		  die(json_encode($results));		
	}
	if ($action == "find_city_max_dist") {
	    $infos = explode("_",$ville1);
		$id_ville1 = $infos[1];
		
		$results = array();
		
		$sql = "SELECT * FROM distances WHERE id = '".$id_ville1."' LIMIT 1";
		$statement = $connection->prepare($sql);
        $statement->execute();
        $res = $statement->fetchAll();
		$data = $res[0];
		$longA = $data["longitude_radian"];
		$latA = $data["latitude_radian"];
		$nomA = $data["nom"];
		
		$results['ville1']['latitude'] = $latA;
		$results['ville1']['longitude'] = $longA;
		$results['ville1']['nom'] = utf8_encode($nomA);
		
		$sql = "SELECT id, nom, code_postal,longitude_radian, latitude_radian FROM distances WHERE id <> '".$id_ville1."'";
		$statement = $connection->prepare($sql);
        $statement->execute();
        $res = $statement->fetchAll();
		foreach ($res as $data) {
		    $longB = $data["longitude_radian"];
		    $latB = $data["latitude_radian"];
			$dist = 6371*acos(cos($latA)*cos($latB)*cos($longB-$longA)+sin($latA)*sin($latB));
			if ($dist <= $dist_max) {
			    //ajouter ville
				$results['code'][] = array('nom' => utf8_encode($data["nom"]),'code_postal' => $data["code_postal"], 'distance' => $dist, 'latitude' => $latB, 'longitude' => $longB);
			}
	    }
		die(json_encode($results));	
	}
	
	

}    
?>
