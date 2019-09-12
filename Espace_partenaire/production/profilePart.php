<?php require_once 'db_connect.php'; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="images/icon.png" type="image/ico" />


    <title>Espace partenaire </title>

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
              <a  class="site_title"  href="listCMDPart.php"><i class="fa fa-cube"></i> <span>Click TOUT</span></a>
            </div>

            

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                
                <ul class="nav side-menu">
					<li><a href="profilePart.php"><i class="fa fa-user"></i> Mon compte </a></li>                
					<li><a href="formCmdPart.php"> <i class="fa fa-edit"></i>Réservation</a></li>
                    <li><a href="listCMDPart.php"><i class="fa fa-list"></i>Liste en attente</a></li>
					<li><a href="historiquePart.php"><i class="fa fa-clock-o"></i>Historique</a></li>
					<li><a href="reclamationPart.php"><i class="fa fa-comments-o"></i> Réclamation </a></li>  
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
			  <?php 
					$sql = "SELECT * FROM partenaire";
					$result = $connect->query($sql);
					$row = $result->fetch_assoc();
					echo'
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/'.$row['logo'].'.jpg" alt="">'.$row['nom_ste'].'
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="profilePart.php"> Mon compte</a></li>
                    
                    
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
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
					<?php 
					$sql = "SELECT * FROM partenaire";
					$result = $connect->query($sql);
					$row = $result->fetch_assoc();
                      echo'<div class="profile_img">
                        <div id="crop-avatar">
                          <!-- Current avatar -->
						  
                          <img class="img-responsive avatar-view" src="images/'.$row['logo'].'.jpg" alt="Avatar" title="Change the avatar">
                        </div>
                      </div>
                      <h3>'.$row['nom_ste'].'</h3>

                      <ul class="list-unstyled user_data">
					  <li><i class="fa fa-user user-profile-icon"></i> '.'  '.$row['responsable'].'
                        </li>
                        <li><i class="fa fa-map-marker user-profile-icon"></i>'.'  '.$row['adresse'].'
                        </li>
						
						<li><i class="fa fa-mobile-phone user-profile-icon"></i>'.'  '.$row['tel'].'
                        </li>
                     <li><i class="fa fa-envelope user-profile-icon"></i>'.'  '.$row['email'].'
                        </li>

                        <li class="m-top-xs">
                          <i class="fa fa-external-link user-profile-icon"></i>
                          <a href="'.$row['siteweb'].'" target="_blank">'.'  '.$row['siteweb'].'</a>
                        </li>
                      </ul>

                      
                      <br />';

                      
							?>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">

						
						<form action="updateProfile.php" method="post" class="form-horizontal form-material">
                                <div class="form-group">
                                    <label class="col-md-12">Nom</label>
                                    <div class="col-md-12">
                                        <input type="text" name="nom_ste" placeholder="Nom" class="form-control form-control-line" value="<?php echo $row['nom_ste'] ?>" > </div>
                                </div>
								<div class="form-group">
                                    <label class="col-md-12">Responsable</label>
                                    <div class="col-md-12">
                                        <input type="text" name="responsable" placeholder="Responsable" class="form-control form-control-line" value="<?php echo $row['responsable'] ?>" > </div>
                                </div>
								<div class="form-group">
                                    <label class="col-md-12">Adresse</label>
                                    <div class="col-md-12">
                                        <input type="text" name="adresse" placeholder="Adresse" class="form-control form-control-line" value="<?php echo $row['adresse'] ?>">
                                    </div>
                                </div>
								  <div class="form-group">
                                    <label class="col-md-12">Téléphone</label>
                                    <div class="col-md-12">
                                        <input type="text" name="tel" placeholder="Téléphone" class="form-control form-control-line" value="<?php echo $row['tel'] ?>"> </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-email" class="col-md-12">Email</label>
                                    <div class="col-md-12">
                                        <input type="email" name="email" placeholder="Email" class="form-control form-control-line" value="<?php echo $row['email'] ?>" > </div>
                                </div>
                                
                              
                                
                                <div class="form-group">
                                    <label class="col-md-12">Site web </label>
                                    <div class="col-md-12">
                                        <input type="text" name="siteweb" placeholder="" class="form-control form-control-line" value="<?php echo $row['siteweb'] ?>">
                                    </div>
                                </div>
								<div class="form-group">
                                    <label class="col-md-12">Mot de passe</label>
                                    <div class="col-md-12">
                                        <input type="password" name="pwd" value="<?php echo $row['pwd'] ?>" class="form-control form-control-line"> </div>
										
                                </div>
								<div class="form-group">
								<input type="hidden" name="id_partenaire" value="<?php echo $row['id_partenaire']?>" />
								</div>
                                <div class="form-group">
                                    <div class="col-sm-12">
				
                                        <button class="btn btn-success" type="submit">Modifer</button>
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
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          
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