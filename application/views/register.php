<html>
<head>
<meta charset="utf-8">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="mobile-web-app-capable" content="yes">
  
  <title>Register</title>  
  <link  href="http://fonts.googleapis.com/css?family=Cabin:400,500,600,bold" rel="stylesheet" type="text/css" >

<link  href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow:regular,bold" rel="stylesheet" type="text/css" >
  <link rel="stylesheet" href="http://vivekuk.tk/aboardci/lib/onsen/css/onsenui.css">  
  <link rel="stylesheet" href="http://vivekuk.tk/aboardci/lib/onsen/css/onsen-css-components.css">  
  <link rel="stylesheet" href="http://vivekuk.tk/aboardci/styles/app.css"/>
<link rel="stylesheet" href="http://vivekuk.tk/aboardci/css/main.css"/>
  <script src="lib/onsen/js/angular/angular.js"></script>    
  <script src="lib/onsen/js/onsenui.js"></script>   
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 

  <script src="http://vivekuk.tk/aboardci/cordova.js"></script>
  <script src="http://vivekuk.tk/aboardci/app.js"></script> 
  <script type="text/javascript">
function submitFormWithValue(){
  document.forms["login"].submit();
}
</script>


</head>

<body background="http://vivekuk.tk/aboardci/img/Drag Layer.png">
  <div id="spacer" style="padding-top:100px">
  </div>
  <div id="loginform" style="padding-top:50px" align="center">
  <h1 style="font-size:24px;" >Register</h1>

<?php
  echo form_open('','');
  echo "Hello";
  echo "<br><br>";
  echo form_label($register_form["username"]["label"], $register_form["username"]["field"]);
  echo form_input($register_form["username"]["field"],'');
  echo "<br><br>";
  echo form_label($register_form["password"]["label"], $register_form["password"]["field"]);
  echo form_input($register_form["password"]["field"],'');
  echo "<br><br>";
  echo form_label($register_form["conpassword"]["label"], $register_form["conpassword"]["field"]);
  echo form_input($register_form["conpassword"]["field"],'');
  echo "<br><br>";
  echo form_label($register_form["name"]["label"], $register_form["name"]["field"]);
  echo form_input($register_form["name"]["field"],'');
  echo "<br><br>";
  echo form_label($register_form["telno"]["label"], $register_form["telno"]["field"]);
  echo form_input($register_form["telno"]["field"],'');
  echo "<br><br>";
  echo form_submit('submit','Register');
  echo form_close();

?>
</div>
</body>
</html>