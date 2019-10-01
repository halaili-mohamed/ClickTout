<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/logo.png" type="image/ico" />

    <title>Click Tout | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
	<script type="text/javascript">
	
	function verification()
{
var mess ='';
 
	if(document.form.pass.value != document.form.PWD.value) {
	  mess += "Le mot de passe et la confirmation ne sont pas identiques !";
	   
	  
	   }
	   if(mess!="")
	   {
 alert (mess)
  document.getElementById("PWD").focus();
    }
	
   }
   </script>
  </head>
   
<?php require_once 'session.php'; 
$sql = "SELECT * FROM administrateur where id_admin={$id_admin}";
$result = $connect->query($sql);
$row = $result->fetch_assoc(); 

	$Id_Transporteur=$_GET['Id_Transporteur'];
	$nom = $_GET['nom'];
	$Prenom = $_GET['Prenom'];
	$Date_naiss = $_GET['Date_naiss'];
	$Email = $_GET['Email'];
	$Adresse = $_GET['Adresse'];
	$Matricule = $_GET['Matricule'];
	$Type_Voiture = $_GET['Type_Voiture'];
	$psudo = $_GET['psudo'];
	$PWD = $_GET['PWD'];
	$Cin=$_GET['Cin'];
	
?>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="profile.php" class="site_title"><i class="fa fa-paw"></i> <span>Click Tout </span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
            
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $row['nom'] ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a href="profile.php"><i class="fa fa-user"></i> Mon compte </a>
				  </li>
				  </ul>
               
                   
                  </li>
				   <ul class="nav side-menu">
                  <li><a href="gestion_transporteur.php"><i class="fa fa-truck"></i> Gestion des transporteurs  </a>
				  </li>
				  </ul>
                     <ul class="nav side-menu">
                  <li><a href="gestion_partenaire.php"><i class="fa fa-users"></i> Gestion des partenaires </a>
				  </li>
				  </ul>
				    <ul class="nav side-menu">
                  <li><a href="commande.php"><i class="fa fa-list-alt"></i> Les commandes </a>
				  </li>
				  </ul>
				   <ul class="nav side-menu">
                  <li><a href="reclamation.php"><i class="fa fa-frown-o"></i> Reclamation </a>
				  </li>
				  </ul>
				   <ul class="nav side-menu">
                  <li><a a href="index.php"><i class="fa fa-bar-chart"></i> Dashboard </a>
				  </li>
				  </ul>
				  
                  
                     
                 
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt=""><?php echo $row['nom'] ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="profile.php"> Profile</a></li>
                  
                    <li><a href="deconnexion"><i class="fa fa-sign-out pull-right"></i> deconnexion</a></li>
                  </ul>
                </li>

                
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>profile</h3>
              </div>

               <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <a href="gestion_transporteur.php"> <button type="button"  class="btn btn-dark fa fa-arrow-left">   </button> </a>
				 
                </div>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row"> 
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Profile transporteur : <?=$nom?> <?=$Prenom?> <small></small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

<form class="form-horizontal form-material" method="post" name="form" action="modif_trasporteur_action.php" >
                                <div class="form-group">
								<input type="hidden" name="Id_Transporteur"  value="<?=$Id_Transporteur?>" />
                                    <label class="col-md-12">Nom</label>
                                    <div class="col-md-12">
                                        <input type="text" name="nom" placeholder="<?=$nom?>" class="form-control form-control-line"> </div>
                                </div>
								 <div class="form-group">
                                    <label class="col-md-12">Prenom</label>
                                    <div class="col-md-12">
                                        <input type="text" name="Prenom" placeholder="<?=$Prenom?>" class="form-control form-control-line"> </div>
                                </div>
								             <div class="form-group">
                                    <label class="col-md-12">Log in</label>
                                    <div class="col-md-12">
                                        <input type="text" name="psudo" placeholder="<?=$psudo?>" class="form-control form-control-line">
                                    </div>
                                </div>
							  <div class="form-group">
                                    <label class="col-md-12">Mot de passe</label>
                                    <div class="col-md-12">
                                        <input type="password" name="pass" class="form-control form-control-line"> </div>
                                </div>
								 <div class="form-group">
                                    <label class="col-md-12">Confirm mot de passe</label>
                                    <div class="col-md-12">
                                        <input type="password"  onblur="verification()" id="PWD" name="PWD" class="form-control form-control-line" /> </div>
                                </div>
								  <div class="form-group">
                                    <label class="col-md-12">N° Cin</label>
                                    <div class="col-md-12">
                                        <input type="text" name="Cin" placeholder="<?=$Cin?>" class="form-control form-control-line">
                                    </div>
                                </div>
								
								 <div class="form-group">
                                    <label class="col-md-12">Date de naissance</label>
                                    <div class="col-md-12">
                                        <input type="text" name="Date_naiss" placeholder="<?=$Date_naiss?>" class="form-control form-control-line"> </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-email" class="col-md-12">Email</label>
                                    <div class="col-md-12">
                                        <input type="email" name="Email" placeholder="<?=$Email?>" class="form-control form-control-line"> </div>
                                </div>
                              
                               
                                <div class="form-group">
                                    <label class="col-md-12">Adresse</label>
                                    <div class="col-md-12">
                                        <input type="text" name="Adresse" placeholder="<?=$Adresse?>" class="form-control form-control-line">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Matricule</label>
                                    <div class="col-md-12">
                                        <input type="text" name="Matricule" placeholder="<?=$Matricule?>" class="form-control form-control-line">
                                    </div>
                                </div>
								 <div class="form-group">
                                    <label class="col-md-12">Type de voiture</label>
                                    <div class="col-md-12">
                                        <input type="text" name="Type_Voiture" placeholder="<?=$Type_Voiture?>" class="form-control form-control-line">
                                    </div>
                                </div>
                   
                               
                               
                               
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success"  type="submit" >Modifer</button>
                                    </div>
                                </div>
                            </form>
  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
          
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- validator -->
    <script src="../vendors/validator/validator.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
	
  </body>
</html>