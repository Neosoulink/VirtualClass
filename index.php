<?php
// session_id('VirtualClass2846');
// session_name('VirtualClass-reservedName');
session_start();

require('datas/kernel/Autoloader.class.php');
Autoloader::register();

if (isset($_SESSION['vc_admin']) AND $_SESSION['vc_admin']['allow'] == 1) {
	$admin_is_connect = 1;
}else{ $admin_is_connect = 0; }

if (isset($_SESSION['vc_user']) AND $_SESSION['vc_user']['allow'] == 1) {
	$user_is_connect = 1;
}else{ $user_is_connect = 0; }


if (!isset($_GET['module']) OR $_GET['section'] == 'index' AND $_GET['module'] == 'index'){
	include_once('settings/index.php');
}else{
	if (file_exists($file = 'settings/'.$_GET['module'].'/'.$_GET['section'].'.php')) {
		include_once($file);
	}else{
		echo 'le fichier "'.$_GET['section'].'.php" n\'existe pas. <a href="?">Aller à l\'accueil</a>';
	}
}

?>