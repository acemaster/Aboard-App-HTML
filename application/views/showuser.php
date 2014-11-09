<html>
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
     <link rel="stylesheet" href="http://vivekuk.tk/aboardci/styles/metro.css" type="text/css">

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
<?php
echo "Name: ".$user['name']."<br>";
echo "Telno: <a href='tel: ".$user['telno']."'>".$user['telno']."</a><br>";

?>
 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Aboard App</a>
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

        <div id="page-wrapper" align="center">
        <br>
        <br>
        <div class="col-sm-2 col-xs-4">
        
        <div id="tile2" class="tile">
        
         <div class="carousel slide" data-ride="carousel">
          <!-- Wrapper for slides -->
          <a href="http://vivekuk.tk/aboardci/index.php/user/getusers"> 
          <div class="carousel-inner">
            <div class="item active">
              <img src="http://vivekuk.tk/aboardci/img/tile1.jpg" class="img-responsive"/>
            </div>
            <div class="item">
              <img src="http://vivekuk.tk/aboardci/img/tile2.jpg" class="img-responsive"/>
            </div>
            <div class="item">
              <img src="http://vivekuk.tk/aboardci/img/tile3.jpg" class="img-responsive"/>
            </div>
            
          </div>
          </a>
         
        </div>    
        </div>
        </div>
              <?php
echo "<h1>Name: ".$user['name']."</h1><br>";
echo "<h2>Telno: ".$user['telno']."<br></h2>";
      
?>
<br>
<br>
<a href="http://vivekuk.tk/aboardci/index.php/user/getusers"> <div class="item" style="background:#cb67a7;">
              <img src="http://vivekuk.tk/aboardci/img/back.jpg" class="img-responsive"/>
            </div></a>
</div>
                   
                   </div>
    <script src="http://vivekuk.tk/aboardci/js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="http://vivekuk.tk/aboardci/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="http://vivekuk.tk/aboardci/js/plugins/morris/raphael.min.js"></script>
    <script src="http://vivekuk.tk/aboardci/js/plugins/morris/morris.min.js"></script>
    <script src="http://vivekuk.tk/aboardci/js/plugins/morris/morris-data.js"></script>
     <script src="http://vivekuk.tk/aboardci/js/metro.js" type="text/javascript"></script>

</body>
</html>