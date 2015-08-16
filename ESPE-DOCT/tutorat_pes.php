<?php
    require_once("bootstrap.php");
	require_once("load_data.php");
	//var_dump($fonctionnaires);
	$template = $twig->loadTemplate('main.html.twig');
	echo $template->render(array(
	    'fonctionnaires' => $fonctionnaires,
		'pemfs' => $pemfs,
		'formateurs' => $formateurs,
		'nom_bouton' => "Affecter tuteurs.",
		'menu' => array('select_formateurs.html.twig','select_pemf.html.twig','select_etudiants.html.twig','submit.html.twig','result.html.twig'),
		'javascript' => 'js/javascript5.html.twig'
	));	
?>



