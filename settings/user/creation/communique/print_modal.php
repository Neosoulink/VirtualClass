<?php 
if ($_POST['type_doc'] == 'Communiqué officiel' ) {
	require 'communique_officiel.php';
}elseif ($_POST['type_doc'] == 'Rapport officiel') {
	require 'rapport_officiel.php';
}else{
	$type_doc = 'document sans nom N°';
	echo $_POST['type_doc'];
}