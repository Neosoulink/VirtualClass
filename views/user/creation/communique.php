<form class="form-horizontal form-label-left" method="post" target="main_fram" action="?module=user&section=creation/communique/chose_document">
<div class="row">
  <div class="col-sm-7">
    <div class="x_panel">
      <div class="x_title">
        <h3>Contenue du document</h3>
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
                        <label class="control-label col-md-4 col-sm-4 col-xs-12">Destiné à :</label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <select class="form-control" name="get_person" onchange="active_oGP(this)" required>
                            <option></option>
                            <option value="Mr le ministre">Mr le ministre</option>
                            <option value="Adjoit ministre">Adjoit ministre</option>
                            <option value="Secretaire">Secretaire</option>
                            <option value="null">Autre</option>
                          </select>
                          <input type="text" name="other_get_person" maxlength="25" id="other_get_person" class="form-control" style="display: none;margin-top: 5px" placeholder="Saisir une autre perssone">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-4 col-sm-4 col-xs-12">Type de document :</label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <select class="form-control" name="type_doc">
                            <option value="Communiqué officiel">Communiqué officiel</option>
                            <option value="Rapport officiel">Rapport officiel</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-4 col-sm-4 col-xs-12">Choix du Ministère :</label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <select class="form-control" name="type_ets">
                            <option value="Ministère des Finances">Ministère des Finances</option>
                            <option value="Ministères de L'Urbanisme & Habita">Ministères de L'Urbanisme</option>
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
                            <option value="min">Mineur</option>
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

                      <!-- <div class="form-group">
                        <label class="control-label col-md-4 col-sm-4 col-xs-12">Adressé à :</label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <select class="select2_multiple form-control" name="for_person[]" style="font-size: 1.2em" multiple="multiple" required>
                            <option value="Mr.Junior">Junior jgf@gmail.com</option>
                            <option value="Mr.Ronald">Ronald dvs@gmail.com</option>
                            <option value="Mr.Dave">Dave davepro@gmail.com</option>
                          </select>
                        </div>
                      </div> -->

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button style="width: 100%" id="send" type="submit" class="btn btn-success" onclick="submitDataEditor()">Submit</button>
                        </div>
                      </div>
                    
                  </div>
                </div>
              </div>
      </div>
  </div>
</div>
</form>