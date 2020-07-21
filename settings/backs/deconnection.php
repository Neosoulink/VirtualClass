<?php 

User::updateLastDeconnect((string)$_SESSION['vc_user']['id']);
SessionManager::sd();

?>

<script>
	window.top.location = '?';
</script>