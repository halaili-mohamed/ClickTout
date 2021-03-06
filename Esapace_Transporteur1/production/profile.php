<?php require_once 'db_connect.php'; 
require_once 'SessionPart.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.png" type="image/ico" />
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
<style>
p
{
    box-shadow: 10px 10px 10px black;
}
</style>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="offre_disponible2.php" class="site_title"><span>Click TOUT</span></a>
            </div>

            <div class="clearfix"></div>
            <br />

            <!-- sidebar menu -->
             <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a href="profile.php"><i class="fa fa-user"></i>Mon compte</a></li>
				  <li><a href="offre_disponible2.php"><i class="fa fa-bell-o"></i>Offres diponibles</a></li>
				  <li><a href="offre_accepte.php"><i class="fa fa-thumbs-o-up"></i>Offres accéptées</a></li>
				  <li><a href="ReclamationPart.php"><i class="fa fa-comments-o"></i> Réclamations</a></li>
                  <li><a href="historiquePart.php"><i class="fa fa-clock-o"></i>Historiques</a></li>
				  <li><a href="deconnexion.php"><i class="fa fa-power-off"></i>Déconnexion</a></li>
                </ul>   
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            
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
						  

                        </div>
                      </div>
                      <h3>'.$row['Nom'].' '.$row['Prenom'].'</h3>

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
						<li><i class="fa fa-tags user-profile-icon"></i>'.'  '.$row['Matricule'].'
                        </li>
						
                      
						';
						//a verfier avec mouhamed
						$sql2="SELECT SUM(prix) as revenue from commende c , transporteur t where c.transporteur_Id_Transporteur= t.id_Transporteur and t.id_Transporteur=$id_Transporteur ";
						//and c.Date BETWEEN DATE_FORMAT( ADDDATE(SYSDATE(), INTERVAL -1 MONTH), %Y-%m-%d) AND DATE_FORMAT( SYSDATE(), %Y-%m-%d) ";		
						$res2=$connect->query($sql2);
						$data = $res2->fetch_assoc();
						
					    echo'  
						 <li><p><i class="fa fa-money"></i> Revenue total du mois :  <br> '.$data['revenue'].'
						
						</p>
						</li> 
						
                        <span class="sparkline_two" style="height: 160px;">
                                      <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                        </span>
                         </ul>
                         <br/>';
							?>
                 
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">

						
						<form action="updateProfile.php" method="post" class="form-horizontal form-material">
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
									<label class="col-md-12"> Voiture </label>
									<div class="col-md-12">
										<input type="text" name="Type_Voiture" class="form-control form-control-line" value="<?php echo $row['Type_Voiture'] ?>"/>
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
                                        <input type="password" name="Password" id="pass1" class="form-control form-control-line" value="<?php echo $row['Password'] ?>"> 
										</div>
                                </div>
								<div class="form-group">
                                    <label class="col-md-12">Vérfier mot de passe</label>
                                    <div class="col-md-12">
                                        <input type="password" name="Password2" id="pass2" class="form-control form-control-line" > 
								</div>
								</div>	
								
								<p id="validate" style="color: red" ></p>
								<div class="form-group">
					
								</div>
								<div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success"id="modif" name="modif" >Modifier</button>
                                    </div>
                                </div>
                                
                            </form>
		
   <script>
  document.getElementById("modif").onclick=function(){
    var pass1 = document.getElementById("pass1").value;
    var pass2 = document.getElementById("pass2").value;
    if (pass1 != pass2) {
      document.getElementById("validate").innerHTML="Mots de passes non Identiques !!";
      document.getElementById("pass2").style.color="RED";
      return false;
     }
     return true;    
};</script>
								
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