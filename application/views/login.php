<html>
<head>
<?php 

$this->load->helper('url');

?>
<head>
  <meta charset="utf-8">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="mobile-web-app-capable" content="yes">
  
  <title>Login</title>  
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
<!--<body>
  <h1 style="font-size:24px;">Login</h1>
  <?php
  echo form_open('','');
  echo form_label($login_form["username"]["label"], $login_form["username"]["field"]);
  echo form_input($login_form["username"]["field"],'');
  echo "<br><br>";

  echo form_label($login_form["password"]["label"], $login_form["password"]["field"]);
  echo form_input($login_form["password"]["field"],'');
  echo "<br><br>";
  echo form_submit('submit','Submit');
  echo form_close();
  ?>
  <br>
  <br>
  <a href="http://vivekuk.tk/aboardci/index.php/login/register">Register</a>

  

  
	  
</body> -->
</html> 
<body background="<?php base_url() ?>http://vivekuk.tk/aboardci/img/Drag Layer.png")?>
   

  <div id="spacer" style="padding-top:100px">
  </div>
  <div id="icon" align="center" style=" padding-top:200px;"><img src="http://vivekuk.tk/aboardci/img/car icon2.png")?>
  </div>
  <div id="loginform" style="padding-top:50px; display:none" align="center" >
  <h1 style="font-size:24px;">Login</h1>
  <?php
  echo form_open('','');
  echo form_label($login_form["username"]["label"], $login_form["username"]["field"]);
  echo form_input($login_form["username"]["field"],'');
  echo "<br><br>";

  echo form_label($login_form["password"]["label"], $login_form["password"]["field"]);
  echo form_input($login_form["password"]["field"],'');
  echo "<br><br>";
  echo form_submit('submit','Submit');
  echo form_close();
  ?>
  <br><br>
  <a href="http://vivekuk.tk/aboardci/index.php/login/register"class="buttonsuper">
        <span>Register</span>
    </a>
  </div>
  
  <script>
    setTimeout(fade_out, 10000);
$("#icon").fadeIn(1000).fadeOut(1000).fadeIn(1000).fadeOut(1000).fadeIn(1000).fadeOut(1000).fadeIn(1000).fadeOut(1000).fadeIn(1000);
function fade_out() {
  $( "#icon" ).animate( { opacity: "0" }, { queue: false, duration: 1000 }).slideUp(1000);

  document.getElementById("loginform").style.display="block";
}

    </script>
    
</body>
</html>