<?php 
if ($_POST['type_doc'] == 'Lettre formelle' ) {
	require 'lettre_formelle.php';
}elseif ($_POST['type_doc'] == 'Lettre transmie en copie') {
	require 'lettre_transmis.php';
}else{ 
	echo "Erreur lors du chargement du contenue";
}