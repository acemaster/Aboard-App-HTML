
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>

    <!-- Bootstrap Core CSS -->
    <link href="http://vivekuk.tk/aboardci/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="http://vivekuk.tk/aboardci/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="http://vivekuk.tk/aboardci/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://vivekuk.tk/aboardci/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]--> 
  <style type="text/css">
  html { height: 100% }
  body { height: 100%; margin: 0; padding: 0 }
  #map-canvas { height: 200px; }
</style>
 <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAVwdj7Yy9uxpmci8r4xEyMLz3Ux2Jq3nQ">
    
    </script>
    <script type="text/javascript">
      clat=<?php echo $location['clat'];?>;
       clongt=<?php echo $location['clongt'];?>;
        flat=<?php echo $location['flat'];?>;
         flongt=<?php echo $location['flongt'];?>;
      function initialize() {
       var cLatlng = new google.maps.LatLng(clat,clongt);
         var fLatlng = new google.maps.LatLng(flat,flongt);
        var mapOptions = {
          center: cLatlng,
          zoom: 12
        };
     var map = new google.maps.Map(document.getElementById("map-canvas"),
            mapOptions);
    
 var markerc = new google.maps.Marker({
      position: cLatlng,
      map: map,
      title: 'Current Location'
  });

 var markerf = new google.maps.Marker({
      position: fLatlng,
      map: map,
      title: 'Final Location'
  });

       
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    markerc.setmap(map);
    markerf.setmap(map);
    
    </script>
    

</head>
<body>
 <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Aboard App</a>
            </div>
            
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
           <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="http://vivekuk.tk/aboardci/index.php/user/updateloc"><i class="fa fa-fw fa-dashboard"></i> Update Location</a>
                    </li>
                    <li>
                        <a href="http://vivekuk.tk/aboardci/index.php/user/getusers"><i class="fa fa-fw fa-table"></i>Get User List</a>
                    </li>
                    <li>
                        <a href="http://vivekuk.tk/aboardci/index.php/user/logout"><i class="fa fa-fw fa-bar-chart-o"></i>Logout</a>
                    </li>
                    
                    
                       
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid" >
            <h1 style="padding-top:50px">Update your Location</h1>
        <div align="center">
    
    <?php 
  echo form_open('','');
  echo "Hello";
  echo "<br><br>";
  echo form_label($updatelocform["initloc"]["label"], $updatelocform["initloc"]["field"]);
  echo form_input($updatelocform["initloc"]["field"],'');
  echo "<br><br>";
  echo form_label($updatelocform["finalloc"]["label"], $updatelocform["finalloc"]["field"]);
  echo form_input($updatelocform["finalloc"]["field"],'');
  echo "<br><br>";
  echo form_submit('submit','Submit');
  echo form_close();

  ?>
   
   
     <div style="padding-top:50px"/>
    <div id="map-canvas"/> 
    </div>
    
    </div>
    </div>
    </div>
    
  <script src="http://vivekuk.tk/aboardci/js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="http://vivekuk.tk/aboardci/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="http://vivekuk.tk/aboardci/js/plugins/morris/raphael.min.js"></script>
    <script src="http://vivekuk.tk/aboardci/js/plugins/morris/morris.min.js"></script>
    <script src="http://vivekuk.tk/aboardci/js/plugins/morris/morris-data.js"></script>
</body>
</html>