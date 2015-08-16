<?php
$connection = $em->getConnection();

$grpRep = $em->getRepository('Groupes');
$groupes = $grpRep->findAll();

$etuRep = $em->getRepository('EtudiantsNonFonctionnaires');
$etudiants = $etuRep->findAll();

$sql = "SELECT * FROM etudiants_non_fonctionnaires WHERE ID_GROUPE >= 36 AND ID_GROUPE <=41 ORDER BY NOM";
$statement = $connection->prepare($sql);
$statement->execute();
$fonctionnaires = $statement->fetchAll();
$x = 0;
foreach ($fonctionnaires as $f) {
  $fonctionnaires[$x]["groupe"] = $grpRep->find($f["ID_GROUPE"])->getGroupe();
  $x++;
}

$espeRep = $em->getRepository('Formateurs');
$formateurs = $espeRep->findBy(array(), array('nom' => 'ASC'));

$matRep = $em->getRepository('Mat');
$mats = $matRep->findBy(array(), array('circo' => 'ASC','matNom'=>'ASC'));
$pemfRep = $em->getRepository('Pemf');
$pemfs = $pemfRep->findAll();
$pfaRep = $em->getRepository('Pfa');
$pfas = $pfaRep->findAll();
$stageRep = $em->getRepository('Stagem1s1');
$tutorRep = $em->getRepository('Tutorat');
$stages = $stageRep->findAll();
$stageDateRep = $em->getRepository('StagesDates');
$stageDates = $stageDateRep->findAll();
$ueRep = $em->getRepository('Ue');
$ues = $ueRep->findAll();

?>



