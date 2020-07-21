<div class="x_panel">
	<div class="x_title">
  	<h2>2<sup>ème</sup> étape <small> Choisisez un model + logo </small></h2>
  	<div class="clearfix"></div>
	</div>
	<div class="x_content">

  	<div class="row">

    	<p>Vous pouvez selectionner un model pour y integrer l'objet.</p>
      <div id="content_infos_doc" style="display:none;">
        <div class="row">
          <div class="col-sm-4">
            <div id="img_info_doc"></div>
            <h5><b><span id="descrip_model"></span></b></h5>
            <input type="hidden" name="physique_img" id="physique_img">
            <input type="hidden" name="id_img" id="id_img">
            <input type="hidden" name="doc_name" id="nom_doc">
          </div>
          
          <div class="col-sm-8">
            <h3>Objet du document :</h3>
            <div style="background-color: rgba(0,0,0,0.01); border: 1px solid rgba(0,0,0,0.05);padding:10px;overflow: hidden;">
               <?= $_POST['descr'] ?>
            </div>
            <textarea name="object" style="display: none">
              <?= $_POST['descr'] ?>
            </textarea>

            <hr>
            <h4>Autre suplémentaire :</h4>
            <div class="form-group">
              <label class="control-label col-sm-4 col-xs-12">Destiné à :</label>
              <div class="col-sm-8 col-xs-12">
                <input type="text" name="get_user" class="form-control" value="<?= $get_person ?>" readonly>
              </div>
             
              <?php /*
              $for_persons = '';
              foreach ($_POST['for_person'] as $key) {
               $for_persons .= $key.',';
              }
              $for_persons = preg_replace("#[,]*$#",'', $for_persons);*/
              ?>
            </div>
            <div class="clearfix" style="margin-bottom: 9px"></div>

            <div class="form-group">
              <label class="control-label col-sm-4 col-xs-12">Type de document :</label>
              <div class="col-sm-8 col-xs-12">
                <input type="text" name="type_doc" class="form-control" value="<?= $_POST['type_doc'] ?>" readonly>
              </div>
            </div>
            <div class="clearfix" style="margin-bottom: 4px"></div>

            <div class="form-group">
              <label class="control-label col-sm-4 col-xs-12">Ministère :</label>
              <div class="col-sm-8 col-xs-12">
                <input type="text" name="type_ets" class="form-control" value="<?= $_POST['type_ets'] ?>" readonly>
              </div>
            </div>
            <div class="clearfix" style="margin-bottom: 4px"></div>
            
            <div class="form-group">
              <label class="control-label col-sm-4 col-xs-12">Statut :</label>
              <div class="col-sm-8 col-xs-12">
                <input type="text" name="statut_doc" class="form-control" value="<?= $_POST['statut_doc'] ?>" readonly>
              </div>
            </div>
            <div class="clearfix" style="margin-bottom: 9px"></div>

            <div class="form-group">
              <label class="control-label col-sm-4 col-xs-12">Confidentialité :</label>
              <div class="col-sm-8 col-xs-12">
                <input type="text" name="text_confidence_doc" class="form-control" value="<?= $confidence[1] ?>" readonly>
                <input type="hidden" name="confidence_doc" value="<?= $confidence[0] ?>">
              </div>
            </div>

          </div>

        </div>
      </div>
    	<?php
      try {
        
      $i=0;
      foreach ($doc_models as $doc_model) {
        $i+=1;
      ?>
    	<div class="col-md-55">
      	<div class="thumbnail">
        	<div class="image view view-first">
            <span id="img_doc_model<?= $i ?>">
              <img style="width: 100%; display: inline-block;text-align: center;" src="web/images/documents/<?= $doc_model->doc_image ?>" alt="image" />
            </span>
          	
          	<div class="mask">
            	<p>Utiliser ce modele</p>
            	<div class="tools tools-bottom">
              	<a href="web/images/documents/<?= $doc_model->doc_image ?>" target="blank_"><i class="fa fa-eye"></i></a>
              	<a href="#"  
                onclick="show_scrollModal($('#content_infos_doc').html(), 
                '<?= $doc_model->doc_name ?>');
                $('#img_info_doc').html($('#img_doc_model<?= $i ?>').html()); 
                $('#descrip_model').html('<?= $doc_model->description ?>');document.querySelector('#physique_img').value ='<?= $doc_model->doc_image ?>'; document.querySelector('#id_img').value ='<?= $doc_model->_id ?>';document.querySelector('#nom_doc').value ='<?= $doc_model->doc_name ?>'; return false;"><i class="fa fa-pencil"></i></a>
            	</div>
          	</div>
        	</div>
        	<div class="caption">
          	<p class="text-uppercase text-bold"><b><?= $doc_model->doc_name ?></b></p>
        	</div>
      	</div>
    	</div>
    <?php 
  		} 
  	} catch (Exception $e) {
  		echo "<h2 class='text-center text-red'><i class='fa fa-wraning'>Erreur d'affichage de model.</i>";
  	}
  	?>
    </div>
  </div>
</div>