<?php

?>
<!-- jQuery -->
<script src="web/assets/vendors/jquery/dist/jquery.min.js"></script>
	
<script>
	//<!--
	$(document).ajaxStart(function () {
    window.top.window.Pace.restart();
  });
  $.ajax({
      type: "GET",
      url: 'views/user/creation/lettre.php',
      error:function(msg){
        // message en cas d'erreur : 
        alert( "Error ! : "+' | '+'views/user/creation/lettre.php not found ! | '+ msg );
      }, 
      success:function(file){
				window.top.window.document.querySelector('#content').innerHTML = file;
        window.top.window.removeEditor();
        window.top.window.createEditor();
        // window.top.window.go_dropzone();
      }
    });
</script>

<script>
  const opt_selectPure = [
    {label : "Mr le premier Ministre", value : "Mr le premier Ministre"},
    {label : "Md la secretaire lirys", value : "Md la secretaire lirys"},
    {label : "Mr le Ministre des Finance", value : "Mr le Ministre des Finance"},
    {label : "Mr le secretaire genrale de Budget", value : "Mr le secretaire genrale de Budget"},
    {label : "Mr le premier Ministre2", value : "Mr le premier Ministre2"},
    {label : "Md la secretaire lirys2", value : "Md la secretaire lirys2"},
    {label : "Mr le Ministre des Finance2", value : "Mr le Ministre des Finance2"},
    {label : "Mr le secretaire genrale de Budget2", value : "Mr le secretaire genrale de Budget2"},
    {label : "Mr le premier Ministre3", value : "Mr le premier Ministre3"},
    {label : "Md la secretaire lirys3", value : "Md la secretaire lirys3"},
    {label : "Mr le Ministre des Finance3", value : "Mr le Ministre des Finance3"},
    {label : "Mr le secretaire genrale de Budget3", value : "Mr le secretaire genrale de Budget3"}
  ];

  let brands = [
    "Mr le premier Ministre",
    "Md la secretaire lirys",
    "Mr le Ministre des Finance",
    "Mr le secretaire genrale de Budget",
    "Mr le premier Ministre2",
    "Md la secretaire lirys2",
    "Mr le Ministre des Finance2",
    "Mr le secretaire genrale de Budget2",
    "Mr le premier Ministre3", 
    "Md la secretaire lirys3",
    "Mr le Ministre des Finance3",
    "Mr le secretaire genrale de Budget3"
  ];

  var option = document.createElement("option");
  
  option.value = "";
  option.text = "";

  setTimeout(function(){
    let select1 = window.top.window.document.getElementById("eg_vsb");
    // select1.appendChild(option);
    for (var i = 0; i < brands.length; i++) {
      var option = document.createElement("option");
      option.value = brands[i];
      option.text = brands[i];
      select1.appendChild(option);
    };

    window.top.window.createSVB();
    window.top.window.createSelectPure("#eg_select_pure", opt_selectPure);
  }, 1000);

   
</script>