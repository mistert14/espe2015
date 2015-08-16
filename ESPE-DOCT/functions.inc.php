<?php
$result = array();
$result['code'] = array();

function list_tutors() {
	global $result,$tutorRep,$pemfRep,$espeRep,$etuRep,$grpRep;
	$tutors = $tutorRep->findAll();
	
	foreach ($tutors as $tutor){
	  $pemf = $pemfRep->find($tutor->getIdPemf());
	  $espe = $espeRep->find($tutor->getIdFormateur());
	  $etu = $etuRep->find($tutor->getIdStudent());
	  $grp = $grpRep->find($etu->getIdGroupe());
	  $result['code'][] = array(
		'id' => $tutor->getId(),
		'pemf_nom' => $pemf->getNom(),
		'pemf_prenom' => utf8_encode($pemf->getPrenom()),
		'espe_nom' => $espe->getNom(),
		'espe_prenom' => utf8_encode($espe->getPrenom()),
		'etu_nom' => $etu->getNom(),
		'etu_prenom' => utf8_encode($etu->getPrenom()),
		'etu_groupe' => utf8_encode($grp->getGroupe()),
	 	
	  );
	  
	}
	
}

function complex_group($connection, $groupe) {
	global $result,$grpRep;
	
	$suite=array();
	$etudiants = array();
	$suite[25]=array(26,31);
	$suite[32]=array(33,35);
	$suite[36]=array(37,38);
	$suite[39]=array(40,41);
	$suite[42]=array(44,0);
	$suite[43]=array(44,0);
	$suite[49]=array(38,40);
	$suite[50]=array(37,41);
			
	if (in_array($groupe,array(49,50))) {
				$joker1 = '=';
				$joker2 = '=';
				$joker3= ' OR ';
	} else {
				$joker1 = '>=';
				$joker2 = '<=';
				$joker3= ' AND ';
	}
			
	$sql = "SELECT * FROM etudiants_non_fonctionnaires WHERE ID_GROUPE ".$joker1."'".$suite[$groupe][0]."'".$joker3."ID_GROUPE ".$joker2."'".$suite[$groupe][1]."' ORDER BY NOM";
	//die($sql);
	$statement = $connection->prepare($sql);
    $statement->execute();
    $res = $statement->fetchAll();
	foreach($res as $etu) {
		$grp = $grpRep->Find($etu["ID_GROUPE"]);
		$result['code'][] = array(
		'id' => utf8_encode($etu["id"]),
		'titre' => utf8_encode($etu["TITRE"]),
		'nom' => utf8_encode($etu["NOM"]),
		'marital' => utf8_encode($etu["MARITAL"]),
		'prenom' => utf8_encode($etu["PRENOM"]),
		'groupe' => utf8_encode($grp->getGroupe()),
		'tp' => utf8_encode($etu["TP"]),
	);	
	}
}	

function pretty_sql($connection, $cours,$bloc,$semestre,$discipline) {
	  global $result;
	  $count =0;
	  $sql = "SELECT * FROM espe_doct.ue WHERE ";
	  if ($cours != "*") {
		$sql .= " COURS='".$cours."'";
        $count+=1;		
	  }
	  if ($bloc != "*") {
		if ($count>0) { 
		    $sql .=' AND ';
		}
		$sql .= " BLOC='".$bloc."'";
        $count+=1;		
	  }
	  
	  if ($semestre != "*") {
		if ($count>0) { 
		    $sql .=' AND ';
		}
		$sql .= " SEMESTRE='".$semestre."'";
        $count+=1;		
	  }
	  
	  if ($discipline != "*") {
		if ($count>0) { 
		    $sql .=' AND ';
		}
		$sql .= " DISCIPLINE='".$discipline."'";
        $count+=1;		
	  }
	  
	  if ($count == 0) { $sql .= ' 1;'; }
	  
      $statement = $connection->prepare($sql);
      $statement->execute();
      $res = $statement->fetchAll();
	  
	  foreach($res as $ue){
		  $result['code'][] = array(
		    'id' => $ue['ID'],
			'bloc' => $ue['BLOC'],
			'cours' => $ue['COURS'],
			'semestre' => $ue['SEMESTRE'],
			'discipline' => $ue['DISCIPLINE'],
			'cm' => $ue['CM'],
			'td' => $ue['TD'],
			'tp' => $ue['TP'],
			'ects' => $ue['ECTS'],
			'coeff' => $ue['COEFF'],
			'description' => utf8_encode($ue['DESCRIPTION']),
			'responsable' => utf8_encode($ue['RESPONSABLE']),
			'controle' => utf8_encode($ue['CONTROLE']),
		  );
	  }
	
}



function maj_stage($stage) {
	global $result, $stageRep,$matRep,$pemfRep,$grpRep,$etuRep,$pfaRep; 
	if ($stage == '*') {
	    $stages = $stageRep->findAll();
	} else {
	    $stages = $stageRep->findBy(array('idStage' => $stage));
	}
	//die(var_dump(count($stages)));
		foreach ($stages as $st) {
			$surv_statut = $st->getMatPemf();
			if ($st->getMatPemf() == 'pfa') {
				$surv= $pfaRep->find($st->getIdMat());
				$surv_nom = $surv->getNom();
				$surv_prenom = $surv->getPrenom();
				$surv_circo = $surv->getEtablissement().' '.$surv->getVille();
			} 
			if ($st->getMatPemf() == 'mat') {
				$surv= $matRep->find($st->getIdMat());
				$surv_nom = $surv->getMatNom();
				$surv_prenom = $surv->getMatPrenom();
				$surv_circo = $surv->getCirco();
			} 
			if ($st->getMatPemf() == 'pemf') 
			{
				$surv= $pemfRep->find($st->getIdMat());
				$surv_nom = $surv->getNom();
				$surv_prenom = $surv->getPrenom();
				$surv_circo = $surv->getCirco();
			}
			
			$etud= $etuRep->find($st->getIdStudent());
			$grp = $grpRep->Find($etud->getIdGroupe());
			$result['code'][] = array(
			    'id_stage' => utf8_encode($st->getId()),
			    'surv_statut' => utf8_encode($surv_statut),
			    'surv_nom' => utf8_encode($surv_nom),
				'surv_prenom' => utf8_encode($surv_prenom),
				'surv_circo' => utf8_encode($surv_circo),
			    'etu_nom' => utf8_encode($etud->getNom()),
				'etu_prenom' => utf8_encode($etud->getPrenom()),
				'etu_groupe' => utf8_encode($grp->getGroupe()),
			);
		}
		return true;
}

 
?>



