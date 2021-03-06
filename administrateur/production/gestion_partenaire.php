<?php 
 
require_once 'session.php'; 
$sql = "SELECT * FROM administrateur where id_admin='$id_admin'";
$result = $connect->query($sql);
$row = $result->fetch_assoc(); 
?>
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
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="profile.php" class="site_title"> <span>Click Tout </span></a>
            </div>

            <div class="clearfix"></div>

          

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
                  <li><a href="commande.php"><i class="fa fa-list-alt"></i> Liste des commandes </a>
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
                     <?php echo $row['login'] ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Mon compte</a></li>
                    
                    <li><a href="deconnexion.php"><i class="fa fa-sign-out pull-right"></i> Déconnexion</a></li>
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
                <h3>Liste des Partenaires</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right ">
                  
                    
                    <span class="input-group-btn"> <a href="ajout_partenaire.php">
                      <button type="button" class="btn btn-primary btn-ms" >
                                <i class="fa fa-plus-square"> </i> Ajouter un partenaire
                              </button></a>
                    </span>
                  
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_content">
                    <div class="row">
                      

                      <div class="clearfix"></div>
  <?php 
						$sql="select * from partenaire ";
						$result = $connect->query($sql);
						if($result->num_rows > 0) {
						while($data=$result->fetch_assoc())
						{echo'
                      <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                        <div class="well profile_view">
                          <div class="col-sm-12">
                            <h4 class="brief"><i>N° partenaire : '. $data['id_partenaire'].' </i></h4>
                            <div class="left col-xs-7">
                              <h2>'. $data['nom_ste'].'</h2>
                              <p><strong> </strong>  </p>
                              <ul class="list-unstyled">
                                <li><i class="fa fa-building"></i> Addresse: '. $data['adresse'].' </li>
                                <li><i class="fa fa-phone"></i> telephone: '. $data['tel'].' </li>
								 <li><i class="fa fa-child"></i> Responsable: '. $data['responsable'].' </li>
								 <li><i class="fa fa-external-link"></i> Site Web: '. $data['siteweb'].' </li>
                              </ul>
                            </div>
                            <div class="right col-xs-5 text-center">
                              <img src='.$data['logo'].' alt="" class="img-circle img-responsive">
                            </div>
                          </div>
                          <div class="col-xs-12 bottom text-center">
                       
                            <div class="col-xs-12 col-sm-6 emphasis">
                              <a href="profile_partenaire.php"><button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
                                </i> </button></a>
                             <a href="offres_partenaire.php">  <button type="button" class="btn btn-primary btn-xs">
                                <i class="fa fa-table"> </i> Offres
                              </button>
							  </a>
                            </div>
                          </div>
                        </div>
                      </div>
';}}?>
                     

                      
                    </div>
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
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
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

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>