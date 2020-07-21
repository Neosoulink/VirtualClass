<?php
//Variable contenant la description des erreurs
$error = '';

if (isset($_POST['user_username']) && $_POST['user_username'] != '' && isset($_POST['user_password']) && $_POST['user_password'] != '') {
	//$admins = getAll_admin();
	$is_ok = 0;
	//Recupération des informations du user se connectant
	if ($user = User::search(['username' => $_POST['user_username'], 'password' => $_POST['user_password']])) {
		if ($user[0]->connected == false or $user[0]->physique == User::getUserIpAddr()) {

			User::updateLastConnect((string)$user[0]->_id);
?>
			<script>
				window.top.window.uploadEnd("<p class='text-center'><b class='text-green'><i class='fa fa-check-circle'></i> Success :</b> Seesion établie</p><?php echo date('j-m-y H:i:s'); ?> <?= session_id(); ?><?= session_name(); ?>", "<i class='fa fa-check-circle'></i> Login");
			</script>
			<?php

			SessionManager::setSession_user(array(
				'allow' => true,
				'id' => $user[0]->_id,
				'username' => $user[0]->username,
				'photo_profile' => $user[0]->photo_profile,
				'email' => $user[0]->email,
			), false);

			?>
			<script>
				window.top.location = '?';
			</script>
		<?php
			$is_ok = 1;
		} else {
		?>
			<script>
				window.top.window.uploadEnd("<p class='text-center'><b class='text-orange'><i class='fa fa-warning'></i>Warning : </b> Vous êtes déjà connecté</p>", "<i class='fa fa-warning'></i>Warning");
			</script>
			<?php
								$is_ok = 1;
							}
						}

						//Si les données ne coresponde pas, un msg sera renvoyé grace à un script js
						if (!$is_ok) {
							$error = "<p class='text-center'><b class='text-orange'><i class='fa fa-warning'></i>Warning :</b> Mot de passe ou nom d'utilisateur invalide</p>";
								?>
		<script>
			window.top.window.uploadEnd("<?php echo $error; ?>", "<i class='fa fa-warning'></i>Warning");
		</script>

<?php
						}
					}
?>
