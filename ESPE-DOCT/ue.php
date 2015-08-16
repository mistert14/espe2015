<?php
    require_once("bootstrap.php");
	require_once("load_data.php");
	
	$template = $twig->loadTemplate('main.html.twig');
	echo $template->render(array(
	    'ues' => $ues,
		'menu' => array('select_ue.html.twig'),
		'javascript' => 'js/javascript4.html.twig'
	));	
?>



