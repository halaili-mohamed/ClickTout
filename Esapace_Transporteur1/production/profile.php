<?php require_once 'db_connect.php'; 
$id_Transporteur=1;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Espace transporteur</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
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
              <a href="offre_dispo2.html" class="site_title"><i class="fa fa-cube"></i> <span>Click TOUT</span></a>
            </div>

            <div class="clearfix"></div>
            <br />

            <!-- sidebar menu -->
             <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a href="profile.php"><i class="fa fa-user"></i>Mon compte</a></li>
				  <li><a href="offre_dispo2.html"><i class="fa fa-bell-o"></i>Offre diponible</a></li>
				  <li><a href="offre_accepte2.html"><i class="fa fa-thumbs-o-up"></i>Offre accépté</a></li>
				  <li><a href="reclamation.html"><i class="fa fa-comments-o"></i> Réclamation</a></li>
                  <li><a href="historique.html"><i class="fa fa-clock-o"></i>Historiques</a></li>
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
			  <?php 
					$sql = "SELECT * FROM transporteur where id_Transporteur={$id_Transporteur}";
					$result = $connect->query($sql);
					$row = $result->fetch_assoc();
					echo'
                <li class="">
                  
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="profile.php"> Mon compte</a></li>
                    
                    
                    <li><a href="login.php"><i class="fa fa-sign-out pull-right"></i> Déconnexion</a></li>
                  </ul>
                </li>'
				?>

               
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
                <h3>Mon compte</h3>
              </div>


            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Modifier votre compte</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
					<?php 
					
                      echo'<div class="profile_img">
                        <div id="crop-avatar">
                          <!-- Current avatar -->
						  
                          <img class="img-responsive avatar-view" src="images/'.$row['photo'].'.jpg" alt="Avatar" title="Change the avatar">
                        </div>
                      </div>
                      <h3>'.$row['Nom'].'</h3>

                      <ul class="list-unstyled user_data">
					    <li><i class="fa fa-birthday-cake user-profile-icon"></i> '.'  '.$row['Date_naiss'].'
                        </li>
                        <li><i class="fa fa-envelope-o user-profile-icon"></i> '.'  '.$row['Email'].'
                        </li>
						
						<li><i class="fa fa-phone user-profile-icon"></i>'.'  '.$row['Telephone'].'
                        </li>
						
                        <li><i class="fa fa-map-marker user-profile-icon"></i>'.'  '.$row['Adresse'].'
                        </li>

                        <li><i class="fa fa-car user-profile-icon"></i>'.'  '.$row['Type_Voiture'].'
                        </li>
                       	<div class="row top_tiles" style="margin: 10px 0 ;border:1px grey ">
						<div class="col-md-12 tile " align="center" style="margin-top: 25px">
						<i class="fa fa-money"></i> Revenue total du mois 
                        <h2>$ 1,231,809</h2>
                        <span class="sparkline_two" style="height: 160px;">
                                      <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                                  </span>
                       </div>
					   </div>
                      </ul>

                      
                      <br />';

                      
							?>
                   <!--   <div class="profile_img">
                        <div id="crop-avatar">
                         
                          <img class="img-responsive avatar-view" src="images/picture.jpg" alt="Avatar" title="Change the avatar">
                        </div>
                      </div>
                      <h3>Nom et prenom</h3>

                      <ul class="list-unstyled user_data">
                        <li><i class="fa fa-birthday-cake user-profile-icon"></i> 12/02/1995
                        </li>
						<li><i class="fa fa-envelope-o user-profile-icon"></i> lmkd@jak
                        </li>
						<li><i class="fa fa-phone user-profile-icon"></i> 72569584
                        </li>
						<li><i class="fa fa-map-marker user-profile-icon"></i> 8042 birbouregba 
                        </li>
						<li><i class="fa fa-car user-profile-icon"></i> citroen 4 cheveaux
                        </li>
						<li>
						<div class="row top_tiles" style="margin: 10px 0 ;border:1px grey ">
						<div class="col-md-12 tile " align="center" style="margin-top: 25px">
						<i class="fa fa-money"></i> Revenue total du mois 
                        <h2>$ 1,231,809</h2>
                        <span class="sparkline_two" style="height: 160px;">
                                      <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                                  </span>
                       </div>
					   </div>
						</li>
                     

                    
                      </ul>

             
                      <br />

                      
-->
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">

						
						<form class="form-horizontal form-material">
                                <div class="form-group">
                                    <label class="col-md-12">Nom</label>
                                    <div class="col-md-12">
                                        <input type="text" name="Nom" class="form-control form-control-line" value="<?php echo $row['Nom'] ?>"> 
									</div>
                                </div>
								<div class="form-group">
									<label class="col-md-12">Prenom </label>
									<div class="col-md-12">
										<input type="text" name="Prenom" class="form-control form-control-line" value="<?php echo $row['Prenom'] ?>" >
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-12">Date de naissance</label>
									<div class="col-md-12">
										<input type="datetime" name="Date_naiss" class="form-control form-control-line"  value="<?php echo $row['Date_naiss'] ?>" />
									</div>
								</div>
                                <div class="form-group">
                                    <label for="example-email" class="col-md-12">Email</label>
                                    <div class="col-md-12">
                                        <input type="email"name="Email"  class="form-control form-control-line" value="<?php echo $row['Email'] ?>" > </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Téléphone</label>
                                    <div class="col-md-12">
                                        <input type="text" name="Telephone"  class="form-control form-control-line" value="<?php echo $row['Telephone'] ?>"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Adresse</label>
                                    <div class="col-md-12">
                                        <input type="text" name="Adresse" class="form-control form-control-line" value="<?php echo $row['Adresse'] ?>">
                                    </div>
                                </div>
								
								<div class="form-group">
									<label class="col-md-12">Voiture</label>
									<div class="col-md-12">
										<input type="text" placeholder=""  class="form-control form-control-line" value="<?php echo $row['Type_Voiture'] ?>"/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-12"> Matricule </label>
									<div class="col-md-12">
										<input type="text" name="Matricule" class="form-control form-control-line" value="<?php echo $row['Matricule'] ?>"/>
									</div>
								</div>
								<div class="form-group">
                                    <label class="col-md-12">Nom d'utilisateur</label>
                                    <div class="col-md-12">
                                        <input type="text" name="Pseudo"  class="form-control form-control-line" value="<?php echo $row['Pseudo'] ?>"> </div>
                                </div>
								<div class="form-group">
                                    <label class="col-md-12">Mot de passe</label>
                                    <div class="col-md-12">
                                        <input type="password" name="Password"  class="form-control form-control-line" value="<?php echo $row['Password'] ?>"> </div>
                                </div>
								<div class="form-group">
								<input type="hidden" name="id_Transporteur" value="<?php echo $row['id_Transporteur']?>" />
								</div>
								<div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success">Modifer</button>
                                    </div>
                                </div>
                                
                            </form>
                      <div class="" role="tabpanel" data-example-id="togglable-tabs">
					  
                        
                    </div>
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
    <!-- morris.js -->
    <script src="../vendors/raphael/raphael.min.js"></script>
    <script src="../vendors/morris.js/morris.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

  </body>
</html>