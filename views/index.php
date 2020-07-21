<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Virtual class | Home</title>
    <!-- Bootstrap -->
    <link href="web/assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="web/assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="web/assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="web/assets/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="web/assets/vendors/animate.css/animate.min.css" rel="stylesheet">
    <!-- PNotify -->
    <link href="web/assets/vendors/pnotify/dist/pnotify.css" rel="stylesheet">
    <link href="web/assets/vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
    <link href="web/assets/vendors/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">
    <!-- iCheck -->
    <!-- <link href="web/assets/vendors/iCheck/skins/flat/green.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="web/assets/vendors/pace/pace.min.css">
    <link rel="stylesheet" href="web/assets/vendors/PACE.js/themes/green/pace-theme-minimal.css">
    <!-- Dropzone.js -->
    <link href="web/assets/vendors/dropzone/dist/min/dropzone.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="web/assets/build/css/custom.css" rel="stylesheet">

    <!-- Custom Select Pure -->
    <link href="web/assets/vendors/select-pure/dist/custom.css" rel="stylesheet">
    <!-- vanillaSelectBox style -->
    <link href="web/assets/vendors/vanillaSelectBox/vanillaSelectBox.css" rel="stylesheet">

  </head>
  <?php 
  //Appel aux Modals
    require 'views/components/logOut.dialog.php';
    require 'views/components/upload.dialog.php';
    require 'views/components/scroller.dialog.php';
    ?>
  <span id="main_container">
    <?php 
    require($contenue);
    ?>
  </span>
  
  <iframe id="main_fram" name="main_fram" src="?module=user&section=main" style="display: none"></iframe>

  <!-- jQuery -->
    <script src="web/assets/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="web/assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="web/assets/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <!-- <script src="web/assets/vendors/nprogress/nprogress.js"></script> -->
    <!-- PACE -->
    <script src="web/assets/vendors/PACE.js/pace.min.js"></script>

    <!-- Chart.js -->
    <script src="web/assets/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- jQuery Sparklines -->
    <script src="web/assets/vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- Flot -->
    <script src="web/assets/vendors/Flot/jquery.flot.js"></script>
    <script src="web/assets/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="web/assets/vendors/Flot/jquery.flot.time.js"></script>
    <script src="web/assets/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="web/assets/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="web/assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="web/assets/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="web/assets/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="web/assets/vendors/DateJS/build/date.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="web/assets/vendors/moment/min/moment.min.js"></script>
    <script src="web/assets/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- PNotify -->
    <script src="web/assets/vendors/pnotify/dist/pnotify.js"></script>
    <script src="web/assets/vendors/pnotify/dist/pnotify.buttons.js"></script>
    <script src="web/assets/vendors/pnotify/dist/pnotify.nonblock.js"></script>
    <!-- Datatables -->
    <script src="web/assets/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="web/assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="web/assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="web/assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="web/assets/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="web/assets/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="web/assets/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="web/assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="web/assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="web/assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="web/assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="web/assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="web/assets/vendors/jszip/dist/jszip.min.js"></script>
    <script src="web/assets/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="web/assets/vendors/pdfmake/build/vfs_fonts.js"></script>
    <!-- Dropzone.js -->
    <script src="web/assets/vendors/dropzone/dist/dropzone.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="web/assets/build/js/custom.js"></script>
    <!-- jQuery Tags Input -->
    <script src="web/assets/vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- ckeditor.js -->
    <script src="web/assets/vendors/ckeditor/ckeditor.js"></script>
    <!-- Select-pure -->
    <script src="web/assets/vendors/select-pure/dist/bundle.min.js"></script>
    <!-- vanillaSelectBox -->
    <script src="web/assets/vendors/vanillaSelectBox/vanillaSelectBox.js"></script>
    
    <script>

        var editor, html = '';

        function createEditor() {
            if ( editor )
                return;

            // Create a new editor inside the <div id="editor">, setting its value to html
            var config = {};
            editor = CKEDITOR.appendTo( 'editor', config, html );
             
        }

        function removeEditor() {
            if ( !editor )
                return;

            // Retrieve the editor contents. In an Ajax application, this data would be
            // sent to the server or used in any other way.
            
            // document.getElementById( 'contents' ).style.display = '';
            // Destroy the editor.
            editor.destroy();
            editor = null;
        }

        function submitDataEditor(){
            document.getElementById( 'descr' ).innerHTML = html = editor.getData();
            document.getElementById( 'editorcontents' ).innerHTML = html = editor.getData();
        }

    </script>

    <script>
      // CallBack selectPure
      var instance = 'Object';

      function createSelectPure (ref_class = ".eg", options = []) {
        instance = new SelectPure(ref_class, {
          options : options,
          multiple: true,
          autocomplete: false,
          icon: "fa fa-times",
          onChange: value => { console.log('is changed'); },
          placeholder: false
        });
      }

    </script>

    <script>
      // CallBack vanilla select box
      var svb_instance = 'Object';

      var default_svb_options = {
        search: true,
        placeHolder: "Select same persons",
        translations: {
          "all": "Tous",
          "items": "Personnes"
        },
        maxWidth: 100
        // stayOpen: true
      }

      function createSVB (ref_class = "#eg_vsb", options = default_svb_options) {
        svb_instance = new vanillaSelectBox(ref_class, options);
      }

    </script>

    <script>
        // let state = {}
        // let title = ''
        // let url = 'hello-world.html'

        // history.pushState(state, title, url)
    </script>
</html>
