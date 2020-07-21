<?php 
Doc_archive::add([
	'id_theme' => $_POST['id_img'],
    'id_user' => $_SESSION['vc_user']['id'],
    'name_theme' => $_POST['doc_name'],
	   'content' => $_POST['object'],
    'get_person' => $_POST['get_user'],
    'type_doc' => $_POST['type_doc'],
    'type_ets' => $_POST['type_ets'],
]);
$i = 0;
$nbr_achive = Doc_archive::getModel();

foreach ( $nbr_achive as $key) {$i++; }
$i++;
$type_doc = '';

if ($_POST['type_doc'] == 'Communiqué officiel' ) {
	$type_doc = 'Communiqué officiel N°'.$i.' DGI/DG/CO';
}elseif ($_POST['type_doc'] == 'Rapport officiel') {
	$voyel_array = ['a','e','i','o','u','y'];
	$pre  = '';
	if (in_array(strtolower($_POST['get_user']{0}), $voyel_array)) {
		$pre = 'a l\'';
	}elseif (strtolower($_POST['get_user']{0}) == 'm') {
	 $pre = 'AU';
	}else{
		$pre = 'à';
	}

	$type_doc = 'Rapport officiel destiné '.$pre.$_POST['get_user'];
	
}else{
	$type_doc = 'document sans nom N°'.$i;
}

$type_ets = (isset($_POST['type_ets'])) ? $_POST['type_ets'] : 'MINISTèRE DE FINANCES';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title style="white-space: 1px">|||||||||||||||||||||||||| - 000044656554BAVC</title>
	<link rel="stylesheet" href="web/assets/vendors/bootstrap/dist/css/bootstrap.min.css">
</head>
<body style="height: 100%;width: 100%">
	<img src="web/images/documents/<?= $_POST['physique_img'] ?>" alt="" style="opacity: 0.1;width: 98%;margin-top: 30vw;position: absolute;margin-left: 0.5vw;">
	<div style="position: relative;padding: 2vh 3vw 0 3vw; display: inline-block;z-index: 10;">
		<header id="header" class="">
			<div class="cont-logo" style="width: 40.2vw; text-align: center;position: relative;">
				<p style="text-transform: uppercase;font-weight: 700;font-size: 0.95em">
					<span>République démocratique du congo</span><br>
					<span style="text-transform: uppercase;"><?= $type_ets ?></span>
				</p>
				<img src="web/images/documents/<?= $_POST['physique_img'] ?>" alt="" style="margin-top:0vh;height: 92px;z-index: -1">
			</div>
			<div style="position: absolute;right: 0%; top: 2.2vh;font-size: 1em">
				<div>Kinshasa le <?=date('j / m / y')?> à <?= date('H:i:s')?></div>
				<div> <b>Document <?= $_POST['statut_doc'] ?> <?= $_POST['text_confidence_doc'] ?> </b></div>
			</div>
			
		</header><!-- /header -->
			<div class="text-center">
				<h2 id="title_doc" style="font-size: 1.8em;text-transform: uppercase;text-align: center;padding-bottom: 5px;border-bottom: 4px solid; display: inline-block;margin-bottom: 20px"><?= $type_doc ?></h2>
			</div>
			<div id="object_doc" style="padding : 0;font-size: 1.5em;line-height: 34px;text-align: justify;">
				<?= $_POST['object'] ?>
			</div>
					
		</main>

		<footer>
			
		</footer>
	</div>
	<h4 style="width: 45vw;position: absolute;right: 2vw; bottom: 8vh; text-transform: uppercase;word-spacing: 0.5vw;white-space:">Fais à kinshasa le <?=date('j / m / y')?> <br>
		<div style="margin-top: 20px"><?= $_POST['get_user'] ?> </div>
	</h4>
</body>
</html>
<!-- jQuery -->
<script src="web/assets/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="web/assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script>
window.print();

window.addEventListener('afterprint', function(){
	window.location.href='?';
}, false);

</script>
<?php

// echo $_POST['physique_img'].'<br>';
// echo $_POST['object'].'<br>';
// echo $_POST['get_user'].'<br>';
// echo $_POST['for_user'].'<br>'; ?>