<?php

?>
<!-- jQuery -->
<script src="web/assets/vendors/jquery/dist/jquery.min.js"></script>
	
<script>
	//<!--
	$(document).ajaxStart(function () {
    window.top.window.Pace.restart();
  });
  $.ajax({
      type: "GET",
      url: 'views/user/creation/communique.php',
      error:function(msg){
        // message en cas d'erreur : 
        alert( "Error ! : "+' | '+'views/user/creation/communique.php not found ! | '+ msg );
      }, 
      success:function(file){
				window.top.window.document.querySelector('#content').innerHTML = file;
        window.top.window.removeEditor();
        window.top.window.createEditor();
        // window.top.window.go_dropzone();
      }
    });
</script>