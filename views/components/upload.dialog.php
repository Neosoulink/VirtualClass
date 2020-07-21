<!-- Dialog HTML |
--  Coposant boite de dialogue, s'adapte avec les uploading ajax
-- Pour fonctionner il à besoin de recuperer l'identifiant "uploadDialog" pour afficher le dialog et "uploadStatus" pour son contenue.
-->

<div id="uploadDialog" class="modal fade">
	<div class="modal-dialog modal-md space-top-l3-pr">
		<div class="modal-content">

		  <div class="modal-header">
		  	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		  	<h4 class="modal-title" id="mtu">Alert</h4>
			</div>
			
			<div class="modal-body">
				<div id="uploadStatus" class="text-center">Veuillez remplire toute les champs</div>
		  	<iframe class="control-group" id="uploadFrame" name="uploadFrame" style="display:none;"></iframe>
			</div>

		</div>
	</div>
</div>