<?php

if (isset($_POST['descr']) AND $_POST['descr'] != '' AND strlen($_POST['descr']) >= 3) {
  $doc_models = Doc_model::getAll();

  $get_person = ($_POST['get_person'] == 'null') ? $_POST['other_get_person'] : $_POST['get_person'];
  $confidence = ($_POST['confidence_doc'] == 'false') ? ['false', 'Non confidenciel'] : ['true', 'Confidenciel'] ;
?>

<!-- jQuery -->
<script src="web/assets/vendors/jquery/dist/jquery.min.js"></script>
<div id="content"> <?php require 'views/user/creation/communique/chose_document.php'; ?> </div>
<div id="form_content">
 <form action="?module=user&section=creation/communique/print_modal" method="post" accept-charset="utf-8">
        <div class="modal-header">
          <h3 class="modal-title" id="mst" style="display: inline-block;">Modal title</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" id="content-ms"> Not data </div>
        <div class="modal-footer">
          <span class="btn btn-secondary" data-dismiss="modal">Close</span>
          <button type="submit" class="btn btn-primary">Save and Print</button>
        </div>

      </form>
</div>
<script>
	//<!--
	$(document).ajaxStart(function () {
    window.top.window.Pace.restart();
  });
  $.ajax({
      type: "GET",
      url: 'views/user/creation/communique/chose_document.php',
      error:function(msg){
        // message en cas d'erreur : 
        alert( "Error ! : "+' | '+'views/user/creation/communique/chose_document.php not found ! | '+ msg );
      }, 
      success:function(file){
				window.top.window.document.querySelector('#content').innerHTML = $('#content').html();
      }
    });
</script>
<script>
  window.top.window.document.querySelector('#modalScrollable .modal-content').innerHTML = $('#form_content').html();
</script>
<?php }else{ ?>

<script>
  window.top.window.show_modal("L'objet ne peut être vide ou peu !", "<i class='fa fa-warning'></i>Warning");
</script>

<?php } ?>