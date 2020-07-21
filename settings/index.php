<?php 

if($admin_is_connect) {
	$contenue = '';
}elseif($user_is_connect) {
	$contenue = 'views/user/index.php';
}else{
	$contenue = 'views/login.php';
}

require('views/index.php');

?>