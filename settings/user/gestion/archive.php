<?php

$docs = Doc_archive::getModel();

?>

<!-- jQuery -->
<script src="web/assets/vendors/jquery/dist/jquery.min.js"></script>
<div id="content"><?php require 'views/user/gestion/archive.php'; ?> </div>
<script>
	//<!--
	$(document).ajaxStart(function () {
    window.top.window.Pace.restart();
  });
  $.ajax({
      type: "GET",
      url: 'views/user/gestion/archive.php',
      error:function(msg){
        // message en cas d'erreur : 
        alert( "Error !: "+' | '+'Agent'+ msg );
      }, 
      success:function(file){
				window.top.window.document.querySelector('#content').innerHTML = document.getElementById('content').innerHTML;
        window.top.window.init_DataTables();
        window.top.window.go_dropzone();
      }
    });
</script>