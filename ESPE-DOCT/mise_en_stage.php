<?php
    require_once("bootstrap.php");
	require_once("load_data.php");
	$template = $twig->loadTemplate('main.html.twig');
	echo $template->render(array(
	    'stages' => $stageDates,
		'groupes' => $groupes,
		'mats' => $mats,
		'pemfs' => $pemfs,
		'pfas' => $pfas,
		'nom_bouton' => "Ajouter un stage.",
		'menu' => array('select_stages.html.twig','select_groupes.html.twig','select_etudiants.html.twig',
		'select_mat.html.twig','select_pemf.html.twig','select_pfa.html.twig','submit.html.twig','result.html.twig'),
		'javascript' => 'js/javascript3.html.twig'
	));	
?>



