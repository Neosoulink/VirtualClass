<?php


?>

<!-- jQuery -->
<script src="web/assets/vendors/jquery/dist/jquery.min.js"></script>

<div id="content">
	<?php require 'views/user/main.php'; ?>
</div>
	
<script>
	//<!--
	$(document).ajaxStart(function () {
    window.top.window.Pace.restart();
  });
  $.ajax({
      type: "GET",
      url: 'views/user/main.php',
      error:function(msg){
        // message en cas d'erreur : 
        alert( "Error !: "+' | '+'Index'+ msg );
      }, 
      success:function(file){
				window.top.window.document.querySelector('#content').innerHTML = $('#content').html();
        window.top.window.init_DataTables();
      }
    });
</script>