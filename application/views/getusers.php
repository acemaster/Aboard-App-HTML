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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
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


<script type="text/javascript">
  
  function setuser(a) {

   document.getElementById("user").value=Number(a);
  document.getElementById("submit").click();
  }



</script>

<?php
$this->load->helper('url');

  function getdist($clat,$clongt,$flat,$flongt)
  {
       $radius=6371;
       $a1=deg2rad($clat);
       $a2=deg2rad($flat);
       $b1=deg2rad($flat-$clat);
       $b2=deg2rad($flongt-$clongt);
       $d=sin($b1/2)*sin($b1/2)+cos($a1)*cos($a2)*sin($b2/2)*sin($b2/2);
       $c=2*atan2(sqrt($d), sqrt(1-$d));
       return $radius*$c;


  }
  echo "<table class='table'><tr><th><strong>Name</strong></th><th><strong>Distance</strong></th></tr>";
   foreach ($query->result() as $row)
   {
      if($row->flat==$location['flat'] && $row->flongt==$location['flongt'] && $row->id!=$location['id'])
        echo "<tr onclick='setuser(".$row->id.")'><th>".$row->id."</th><th>".getdist($location["clat"],$location["clongt"],$row->clat,$row->clongt)."</th></tr>";

   }

   echo "</table>";

       

?>
<form style="visibility: hidden" action=<?php echo site_url('user/showuser') ?> method="POST">
<input type="text" id="user" name="user" >
<input type="submit" id="submit" >
</form>

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