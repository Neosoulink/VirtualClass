<?php
$error = "";
if (!$_POST['for_person'] && $_POST['type_doc'] == 'null') {$error .= '<span class=\"text-danger\"><i class=\"fa fa-warning\"></i> Veullez selectionner une ou plusieur personne en copie</span> <br/>';}

if (!(isset($_POST['descr']) AND $_POST['descr'] != '' AND strlen($_POST['descr']) >= 3)){$error .= '<span class=\"text-danger\"><i class=\"fa fa-warning\"></i> L\'objet ne peut être vide ou peu !</span>';}

if ($error === "") {
  $doc_models = Doc_model::getAll();

  $get_person = ($_POST['get_person'] == 'null') ? $_POST['other_get_person'] : $_POST['get_person'];
  $confidence = ($_POST['confidence_doc'] == 'false') ? ['false', 'Non confidenciel'] : ['true', 'Confidenciel'] ;

  if ($_POST['type_doc'] == 'null') {
    $type_doc='Lettre transmie en copie';
    $for_persons = "";
    foreach ($_POST['for_person'] as $key) {
       $for_persons .= $key.',';
    }
    $for_persons = preg_replace("#[,]*$#",'', $for_persons);
  }else{
    $type_doc = $_POST['type_doc'];
  }
?>

<!-- jQuery -->
<script src="web/assets/vendors/jquery/dist/jquery.min.js"></script>
<div id="content"> <?php require 'views/user/creation/lettre/choose_document.php'; ?> </div>

<div id="form_content">
  <form action="?module=user&section=creation/lettre/print_modal" method="post" accept-charset="utf-8">
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
      url: 'views/user/creation/lettre/choose_document.php',
      error:function(msg){
        // message en cas d'erreur : 
        alert( "Error ! : "+' | '+'views/user/creation/lettre/chose_document.php not found ! | '+ msg );
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
  window.top.window.show_modal("<?= $error ?>", "<span class=\"text-warning \"> <i class='fa fa-warning'></i> Warning</span>");
</script>
</span>
<?php } ?>