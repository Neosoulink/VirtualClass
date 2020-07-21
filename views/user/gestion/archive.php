<div class="content-archive col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Historique d'archivage<small>Tout les documments</small></h2>
      <ul class="nav navbar-right panel_toolbox">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Settings 1</a></li>
            <li><a href="#">Settings 2</a></li>
          </ul>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <!-- /.x_title -->

    <div class="x_content">
      <p class="text-muted font-13 m-b-30">
            Consulter l'historique pour vous reperer dans vos documents, tout est mise en place pour vous faciliter la vie. Utiliser la bar de recherche pour retrouver plus facilement ce que vous chercher.
      </p>
                    
      <table id="datatable-buttons" class="table table-striped table-bordered" style="width: 100%">
        <thead>
          <tr>
            <th>#</th>
            <th>Type Doc</th>
            <th>Ministère</th>
            <th style="width: 230px">Destiné à</th>
            <th>Mat. User</th>
            <th>Date</th>
          </tr>
        </thead>

        <tbody>
        <?php
          try {
                          
          $i=0;
          foreach ($docs as $doc) {
            $i+=1;
        ?>

          <tr>
            <td><?= $i ?></td>
            <td><?= $doc->type_doc ?></td>
            <td><?= $doc->type_ets ?></td>
            <td><?= $doc->get_person ?></td>
            <td><?= $doc->id_user ?></td>
            <td>le <?= $doc->date_creation[0] ?> à <?= $doc->date_creation[1] ?></td>
          </tr>

        <?php }} catch (Exception $e) {
          echo "string";
        } ?>

        </tbody>      
      </table>
    </div>
    <!-- /.x_content -->
  </div>
  <!-- /.x_panel -->
</div>
<!-- /.content-archive -->