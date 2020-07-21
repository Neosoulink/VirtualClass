<!-- Modal HTML -->
<div id="monModal" class="modal fade">
   <div class="modal-dialog modal-sm">
    <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h5 class="absolute top">Confirmation</h5>
            </div>
            <div class="modal-body text-center">
	            <p>Voulez-vous réellement vous déconnecter de votre compte ?</p>
	        </div>
	        <div class="modal-footer">
	            <button  class="btn btn-default" data-dismiss="modal">Fermer</button>
	            <a href="?module=backs&section=deconnection" onclick="this.disabled='disabled';document.getElementById('lsd').style.display ='inline-block'" target="main_fram"   class="btn btn-primary"><i class="fa fa-spinner fa-spin" id="lsd" style="display: none"></i> Se déconnecter</a>
	        </div>
        </div>
    </div>
</div>

<!-- history.pushState({ path: this.path }, '', 'http://www.MonSite.com/maNouvellePage.html'); -->