<?php
    require_once("bootstrap.php");
	require_once("load_data.php");
	
	function set_data($mat,$nbStage=0,$etu=null,$stg=null){
		global $data, $groupRep;
		
		$data[] = array(
			     'id' => $mat->getId(),
				 'nombre_stage' => $nbStage,
				 'mat_nom' => $mat->getNom(),
				 'mat_prenom' => utf8_encode($mat->getPrenom()),
				 //'mat_niveau' => utf8_encode($mat->getNiveau()),
				 //'mat_circo' => utf8_encode($mat->getCirco()),
				 'mat_ecole' => utf8_encode($mat->getEtablissement()),
				 'mat_ville' => utf8_encode($mat->getVille()),
				 //'mat_mail' => utf8_encode($mat->getEcoleMail()),
				 
				 
		);
	if ($etu) {
		$groupe = $groupRep->find($etu->getIdGroupe());
		$data[count($data)-1] = $data[count($data)-1] + array(
			'stage_rem' => utf8_encode($stg->getRemarque()),
			'etu_nom' => utf8_encode($etu->getNom()),
			'etu_prenom' => utf8_encode($etu->getPrenom()),
			'etu_groupe' => utf8_encode($groupe->getAffectationEspe()),
		);
	} else {
		$data[count($data)-1] = $data[count($data)-1] + array(
			'stage_rem' => utf8_encode("PAS DE STAGE"),
		);	
	}
	
	}
	
	$data=array();
	foreach ($pfas as $pfa) {
		$stgs = $stageRep->findByIdMat($pfa->getId());
		
		if (count($stgs) > 0) {
			$nb_stage = 1;
			foreach ($stgs as $stg) {
				
			  	$etu = $etuRep->find($stg->getIdStudent());
				set_data($pfa,$nb_stage,$etu,$stg);
				$nb_stage += 1;
			}
		} else {
			set_data($pfa);
		}
		
	}
		
	$template = $twig->loadTemplate('main.html.twig');
	echo $template->render(array(
	    'data' => $data,
		'menu' => array('pfa_status.html.twig'),
	));	
?>



