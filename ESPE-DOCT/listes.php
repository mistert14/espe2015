<?php
    require_once("bootstrap.php");
	require_once("load_data.php");
	$template = $twig->loadTemplate('main.html.twig');
	echo $template->render(array(
		'groupes' => $groupes,
		'menu' => array('select_groupes.html.twig','result.html.twig'),
		'javascript' => 'js/javascript2.html.twig'
	));	
?>



