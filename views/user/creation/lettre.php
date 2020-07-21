<form class="form-horizontal form-label-left" method="post" target="main_fram" action="?module=user&section=creation/lettre/choose_document">
  <input type="hidden" name="back_for_person" id="back_for_person" value="">

  <div class="row">
    <div class="col-sm-7">
      <div class="x_panel">
        <div class="x_title">
          <h3>Contenue de la lettre </h3>
          <div class="clearfix"></div>
        </div>
        <!-- This div will hold the editor. -->
          <div id="editor">
          </div>
          <div id="contents" style="display: none;">
            <p>
              Edited Contents:
            </p>
            <!-- This div will be used to display the editor contents. -->
            <div id="editorcontents">
            </div>

          </div>
        <textarea name="descr" id="descr"  style="display: none;"></textarea>
    </div>
  </div>

  <div class="col-sm-5">
    <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h3>Inserez les infos <small>suplaimentaires</small></h3>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                      <p>Inserez les infos de destination du document.
                      </p>
                      <span class="section"><h4>Info de destination</h4></span>

                      <div class="form-group">
                        <label class="control-label col-md-4 col-sm-4 col-xs-12">Destiné à* :</label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <select class="form-control" name="get_person" onchange="active_oGP(this)" required>
                            <option></option>
                            <option value="Mr le ministre">Mr le ministre</option>
                            <option value="Adjoit ministre">Adjoit ministre</option>
                            <option value="Secretaire">Secretaire</option>
                            <option value="null">Autre</option>
                          </select>
                          <input type="text" name="other_get_person" maxlength="25" id="other_get_person" class="form-control" style="display: none;margin-top: 5px" placeholder="Saisir une autre personne">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-4 col-sm-4 col-xs-12">Type de document :</label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <select class="form-control" name="type_doc" onchange="
                            active_oGP(this, document.querySelector('.cont_eg_vsb'));
                            // if (this.value == 'null') {
                            //   document.getElementById('eg_vsb').required = true
                            // } else { 
                            //   document.getElementById('eg_vsb').required = false 
                            // }
                          ">
                            <option value="Lettre formelle">Lettre formelle</option>
                            <option value="null">Lettre transmie en copie</option>
                          </select>

                          <!-- <div id="eg_select_pure" style="display: none"></div> -->
                          <span style="display: none;" class="cont_eg_vsb">
                            <select id="eg_vsb" multiple size="3" name="for_person[]"></select>
                            <button type="button" onclick="svb_instance.setValue('all')">Select All</button> <button type="button" onclick="svb_instance.empty()">Empty</button>
                          </span>
                          
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-4 col-sm-4 col-xs-12">Objet* :</label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <textarea  name="object_doc" class="form-control" placeholder="Saisir L'objet de la lettre" required></textarea>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-4 col-sm-4 col-xs-12">Choix du Ministère :</label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <select class="form-control" name="type_ets">
                            <option value="Ministère des Finances">Ministère des Finances</option>
                            <option value="Ministères de L'hurbanisme">Ministères de L'Urbanisme</option>
                            <option value="Ministère de l'économie politique">Ministère de l'économie politique</option>
                          </select>
                        </div>
                      </div>
                          
                      <div class="form-group">
                        <label class="control-label col-md-4 col-sm-4 col-xs-12">Statut :</label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <select class="form-control" name="statut_doc">
                            <option value=""></option>
                            <option value="urgent">Urgent</option>
                            <option value="inportant">Important</option>
                            <option value="mineur">Mineur</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-4 col-sm-4 col-xs-12">Confidentialité :</label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <select class="form-control" name="confidence_doc">
                            <option value="false">Document non confidenciel</option>
                            <option value="true">Document confidenciel</option>
                          </select>
                        </div>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button style="width: 100%" id="send" type="submit" class="btn btn-success" 
                          onclick="
                            submitDataEditor();
                            /*document.getElementById('back_for_person').value = instance.value();*/
                          ">Submit</button>
                        </div>
                      </div>
                    
                  </div>
                </div>
              </div>
      </div>
  </div>
</div>
</form>