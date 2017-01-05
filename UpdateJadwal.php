<?php
session_start();
include "db_connection.php";
if ( !isset($_SESSION['logged-in']) || $_SESSION['logged-in'] !== true) {

header('Location: index.php');

exit;

} else { 
$ID_RUANGAN = mysql_real_escape_string($_GET['ID_RUANGAN']); //get the no which will updated
$ID_MATKUL = mysql_real_escape_string($_GET['ID_MATKUL']);
$query = "SELECT * FROM jadwal where ID_RUANGAN='$ID_RUANGAN' AND ID_MATKUL='$ID_MATKUL'"; //get the data that will be updated
$hasil= mysql_query($query);
$data = mysql_fetch_array($hasil);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Uji Coba bang</title>
	
	<!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body class="homepage">

    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                        <div class="top-number"><p></p></div>
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       
                                </form>
                           </div>
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo"></a>
                </div>
				
                 <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="admin_homepage.php">Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">info <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="sjadwal.php">Jadwal</a></li>
								<li><a href="sruangan.php">Ruangan</a></li>
								<li><a href="smatakuliah.php">Mata Kuliah</a></li>
                            </ul>
                        </li>                      <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tambah Data<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="i_jadwal.php">Jadwal</a></li>
								<li><a href="i_ruangan.php">Ruangan</a></li>
								<li><a href="i_matakuliah.php">Mata Kuliah</a></li>
                            </ul>
                        </li>                      <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Edit Data <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="e_jadwal.php">Jadwal</a></li>
								<li><a href="e_ruangan.php">Ruangan</a></li>
								<li><a href="e_matakuliah.php">Mata Kuliah</a></li>
                            </ul>
                        </li>                      
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Keluar <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="logout.php">Log out</a></li>
                            </ul>
                        </li>        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
		
    </header><!--/header-->
	<br><br><br><br>

    <section id="feature" >
        <div class="container">
           <div class="center wow fadeInDown">
		   
		   <<div id="content">
				
				<!-- Box -->
				<div class="box">
				<div class="box-head">
						<h2>Update Jadwal</h2>
					</div>
					<!-- End Box Head -->
					<br><br>
					<form name='Update' method = 'post' action='UpdateTabelJadwal.php'>
						
						<!-- Form -->
						<div class="form">
							<center>
							<table border="0">
							<tr>
										<td width="200px"><p align="left"><label>ID RUANGAN : </label></p></td>
										<td><input name="ID_RUANGAN" type="text" disabled='disable' value="<?php echo $data['ID_RUANGAN']?>" class="field size1" ></td>
									
							</tr>
							<tr>
										<td width="200px"><p align="left"><label>ID MATA KULIAH : </label></p></td>
										<td><input name="ID_MATKUL" type="text" disabled='disable'value="<?php echo $data['ID_MATKUL']?>" class="field size1" ></td>
									
							</tr>
							<tr>
										<td width="200px"><p align="left"><label>HARI : </label></p></td>
										<td><input name="HARI" type="text" value="<?php echo $data['HARI']?>" class="field size1" ></td>
									
							</tr>
							<tr>
										<td width="200px"><p align="left"><label>JAM : </label></p></td>
										<td><input name="JAM" type="text" value="<?php echo $data['JAM']?>" class="field size1" ></td>
									
							</tr>
							</table>
							</center>
						</div>
						<!-- End Form -->
						
						<!-- Form Buttons -->
						<br><br><br>
						<div class="buttons">
							<input type="hidden" name="ID_RUANGAN" value="<?php echo $data['ID_RUANGAN']; ?>">
							<input type="hidden" name="ID_MATKUL" value="<?php echo $data['ID_MATKUL']; ?>">
							<input type="SUBMIT" name="SUBMIT" value="UPDATE">
						</div>
          
      
       </div>
	   </div>
       </div>
    </section><!--/#bottom-->
<br><br><br>
    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2013 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">ShapeBootstrap</a>. All Rights Reserved.
                </div>
                
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
	</div>
</body>
</html>
<?php
     };
     ?>