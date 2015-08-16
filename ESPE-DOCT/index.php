<?php
require_once("bootstrap.php");
require_once("load_data.php");
$template = $twig->loadTemplate('main.html.twig');
$links=array(
	  "Outil listes" => "listes.php",
	  //"Outil agenda" => "agenda.php",
      "Outil pour les UE" =>"ue.php",
      "Outil pour calculer des distances entre plusieurs villes.php" => "distance.php",
      "Outil de mise en stage" =>"mise_en_stage.php",
      //"Outil de synthese des stages premier semestre" =>"mise_en_stageM1S1_synth.php?toto=1",
      "Outil de synthese des MAT" =>"mat_status.php",
	  "Outil de synthese des PEMF" =>"pemf_status.php",
	  "Outil de synthese des PFA" =>"pfa_status.php",
      //"Outil dossiers" =>"dossiers_h1.php",
      //"Outil de contr&ocirc;le ADE" =>"ade_ctrl.php?ue=UE%20311B&grp=F2",
      //"Outil de contr&ocirc;le ADE final par UE" =>"ade_ctrl_final.php",
      //"Outil de contr&ocirc;le ADE final par formateur" =>"ade_ctrl_final2.php",
      "Tutorat PES" =>"tutorat_pes.php"
	);
echo $template->render(array('start' => True, 'links' => $links, 'menu' => array('menu.html.twig')));

?>



