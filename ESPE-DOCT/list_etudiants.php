<?php
require_once("bootstrap.php");
$etuRep = $em->getRepository('EtudiantsNonFonctionnaires');
$etudiants = $etuRep->findAll();
foreach ($etudiants as $etud) {
  $result['code'][] = array(
			'id' => utf8_encode($etud->getId()),
			'titre' => utf8_encode($etud->getTitre()),
			'nom' => utf8_encode($etud->getNom()),
			);	
}
die(json_encode($result));
			
?>