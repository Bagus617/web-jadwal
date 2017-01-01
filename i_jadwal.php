<?php
session_start();
include "db_connection.php";
if ( !isset($_SESSION['logged-in']) || $_SESSION['logged-in'] !== true) {
// not logged in, move to login page
header('Location: index.php');
exit;
} else { 

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
	<script type='text/javascript'>
function formValidator(){
	// Make quick references to our fields
	var ID_MATKUL= document.getElementById('id_matkul');
	var ID_RUANGAN = document.getElementById('id_ruangan');
	var HARI = document.getElementById('hari');
	var JAM = document.getElementById('jam');
	
	// Check each input in the order that it appears in the form!
	if(notEmpty(ID_MATKUL, "Masukkan ID Mata Kuliah")){
		if(isAlphanumeric(ID_MATKUL, "ID Mata Kuliah Masukkannya hanya Alphanumeric")){
			if(lengthRestriction(ID_MATKUL, 6,10)) {
				if(notEmpty(ID_RUANGAN, "Masukkan ID Ruangan")){
					if(isAlphanumeric(ID_RUANGAN, "ID Ruangan Masukkannya hanya Alphanumeric")){
						if(lengthRestriction(ID_RUANGAN, 4,10)){
							if(notEmpty(HARI, "Masukkan Hari")){
								if(isAlphabet(HARI, "Hari Masukkannya hanya huruf")){
									if(lengthRestriction(HARI, 4,7)){
										if(notEmpty(JAM, "Masukkan Jam")){
											if(isJam(JAM, "Masukkan Jam Salah")){
												if(lengthRestriction(JAM, 11,15)){
												return true;
												}
											}
										}
									}
								}
							}
						}
					}
				}
			}
		}
	}
	return false;
}

function notEmpty(elem, helperMsg){
	if(elem.value.length == 0){
		alert(helperMsg);
		elem.focus(); // set the focus to this input
		return false;
	}
	return true;
}
	function isAlphabet(elem, helperMsg){
	var alphaExp = /^[a-zA-Z ]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

function isAlphanumeric(elem, helperMsg){
	var alphaExp = /^[0-9a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
function lengthRestriction(elem, min, max){
	var uInput = elem.value;
	if(uInput.length >= min && uInput.length <= max){
		return true;
	}else{
		alert("Please enter between " +min+ " and " +max+ " characters");
		elem.focus();
		return false;
	}
}
function isJam(elem, helperMsg){
	var dateExp =/^[0-9:-]+$/;
	if(elem.value.match(dateExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
	</script>
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
		   
		   <!-- Content -->
			<div id="content">
				
				<!-- Box -->
				<div class="box">
				<div class="box-head">
						<h2>Insert Jadwal</h2>
					</div>
					<!-- End Box Head -->
					<br><br>
					<form name='Insert' method = 'post' action='insert_jadwal.php' onSUBMIT='return formValidator()'>
						
						<!-- Form -->
						<div class="form">
							<center>
							<table border="0">
							<tr>
										<td width="200px"><p align="left"><label>ID MATA KULIAH: </label></p></td>
											<?php
											$query = "SELECT * FROM mata_kuliah";
											$result= mysql_query($query);
											?>
										<td>
										<select name="id_matkul" id="id_matkul" type="text"  class="field size1" required="required">
											 <option value="">-Matkul-</option>
											 <?php while ($data = mysql_fetch_array($result)) 
													{ ?>
											 <option value='<?php echo $data['ID_MATKUL'] ?>'><?php echo $data['ID_MATKUL'] ?> | <?php echo $data['NAMA_MATKUL'] ?></option>
											 <?php } ?>
										</select>
										</td>
							</tr>
							<tr>
										<td width="200px"><p align="left"><label>ID RUANGAN : </label></p></td>
										<?php
										$query = "SELECT * FROM ruangan";
										$result= mysql_query($query);
										?>
										<td>
										<select name="id_ruangan" id="id_ruangan" type="text"  class="field size1"required="required">
											 <option value="">-Ruangan-</option>
											 <?php while ($data = mysql_fetch_array($result)) 
													{ ?>
											 <option value='<?php echo $data['ID_RUANGAN'] ?>'><?php echo $data['ID_RUANGAN'] ?> | <?php echo $data['NAMA_RUANGAN'] ?></option>
											 <?php } ?>
										</select>
										</td>										
										
							</tr>
							<tr>
										<td width="200px"><p align="left"><label>HARI : </label></p></td>
										<td>
										<select name="hari" id="hari" type="text"  class="field size1"required="required">
											 <option value="">-Hari-</option>
											 <option value="Senin">Senin</option>
											 <option value="Selasa">Selasa</option>
											 <option value="Rabu">Rabu</option>
											 <option value="Kamis">Kamis</option>
											 <option value="Jumat">Jumat</option>
										</select>
										</td>	
							</tr>
							<tr>
										<td width="200px"><p align="left"><label>JAM : </label></p></td>
										<td>
										<select name="jam" id="jam" type="text"  class="field size1" required="required">
											 <option value="">-Jam-</option>
											 <option value="07:50-09:30">07:50-09:30</option>
											 <option value="09:50-11:30">09:50-11:30</option>
											 <option value="12:50-14:30">12:50-14:30</option>
											 <option value="14:50-16:30">14:50-16:30</option>
											 <option value="16:50-18:30">16:50-18:30</option>
										</select>
										</td>										
							</tr>
							<tr>
							<td width="200px"><p align="left"><label>STATUS : </label></p></td>
							<td>
								  <select id="status" name="status" class="field size1" required="required">
									 <option value="">-Status Matkul-</option>
									 <option value="Teori">Teori</option>
									 <option value="Praktek">Praktek</option>
								  </select>
							<td>
										
										
									
							</tr>
							</table>
							</center>
						</div>
						<!-- End Form -->
						
						<!-- Form Buttons -->
						<br><br><br>
						<div class="buttons">
							<input type="SUBMIT" class="button" value="INSERT" />
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