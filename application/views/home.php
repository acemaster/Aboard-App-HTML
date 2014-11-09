<html>

<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Aboard App</title>
    
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

    
</head>

<body align="center" style="color: #FFFFF">


 <!-- <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
             Brand and toggle get grouped for better mobile display 
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Aboard App</a>
            </div>
            
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens 
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
            <!-- /.navbar-collapse 
        </nav>-->

              <h3 style="color:#FFF"><strong>Name: </strong><?php echo $name?></h1>
               <h3 style="color:#FFF"><strong>Telno: </strong><?php echo $telno?></h1>
               <br>
               <br>
               <br>
            <div class="container-fluid">
           <div class="container dynamicTile">
      <div class="row ">
    <div class="col-sm-2 col-xs-4">
       <a href="http://vivekuk.tk/aboardci/index.php/user/updateloc"> <div id="tile1" class="tile">
        
         <div class="carousel slide" data-ride="carousel">
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
               <img src="http://vivekuk.tk/aboardci/img/updateloc.jpg" class="img-responsive"/>
            </div></a>
            
          </div>
        </div>
         
        </div>
        </div>
                

        
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

    <div class="col-sm-2 col-xs-4">
        <a href="http://vivekuk.tk/aboardci/index.php/user/logout"> <div id="tile1" class="tile">
        
         <div class="carousel slide" data-ride="carousel">
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
               <img src="http://vivekuk.tk/aboardci/img/Logout.jpg" class="img-responsive"/>
            </div></a>
            
          </div>
        
        </div>
         
        </div>
        </div>
        
    <div class="row " align="center">
    <div class="col-sm-2 col-xs-4"><p style="color:#FFF">Update Loc</p>
    </div>
    
    <div class="col-sm-2 col-xs-4"><p style="color:#FFF">Get Location</p>
    </div>

    <div class="col-sm-2 col-xs-4"><p style="color:#FFF">Logout</p>
    </div>
    </div>

        
        </div>
            <!-- /.container-fluid -->

        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
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