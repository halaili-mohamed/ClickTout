<?php require_once 'db_connect.php'; 
$id_partenaire=1;

$sql = "SELECT * FROM partenaire where id_partenaire={$id_partenaire}";
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
    <!-- bootstrap-datetimepicker -->
    <link href="../vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="formCmdPart.php" class="site_title"><i class="fa fa-cube"></i> <span>Click TOUT</span></a>
            </div>

            <div class="clearfix"></div>

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
               <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/<?php echo $row['logo'] ?>.jpg" alt=""><?php echo $row['nom_ste'] ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="profilePart.php"> Mon compte</a></li>
                    
                    
                    <li><a href="login.php"><i class="fa fa-sign-out pull-right"></i> Déconnexion</a></li>
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
			 

              
            </div>
            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Réservation</h2>
                   
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <!-- Tabs -->
					
                    <div >
                      
                      <div align="center">
                        <h2 class="StepTitle">Choisissez la destination et la date de votre commande</h2>

                        <form action="AjoutCmdPart.php/create.php" method="post" >

                        <div class="form-row">

                          <div class="col" >
                            
                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
							 
							<input type="text" class="form-control has-feedback-left" name="Adresse_depart" placeholder="Départ" value="<?php echo $row['adresse'] ?>">
							<span class="fa fa-map-marker form-control-feedback left" aria-hidden="true"></span>
							</div>

                          </div>
                          <div class="col">
						  
							<div class='class="col-md-6 col-sm-6 col-xs-12'>
                    
								<div class="form-group">
									<div class='input-group date' id='myDatepicker2'>
										<span class="input-group-addon">
										   <span class="glyphicon glyphicon-calendar"></span>
										</span>
										<input type='text' name="Date" class="form-control" placeholder="Date" />
										
									</div>
								</div>
							</div>
                          </div>
						</div>
						  
						 <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
							<input type="text" class="form-control has-feedback-left" name="Adresse_arrive" placeholder="Destination">
							<span class="fa fa-flag form-control-feedback left" aria-hidden="true"></span>
						</div>
						  
						<div class='class="col-md-6 col-sm-6 col-xs-12'>
							<div class="form-group">
								<div class='input-group date' id='myDatepicker3'>
									<span class="input-group-addon">
									   <span class="glyphicon glyphicon-time"></span>
									</span>
									<input type='text' class="form-control" name="Heure" placeholder="Horaire" />
									
								</div>
							</div>
						</div>
						 </br> 
						   <h2 class="StepTitle">Des informations supplémentaires</h2>
                          <div class="form-row">
                           <div class="col"> 
								<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
									<input type="text" class="form-control has-feedback-left" name="type_voiture" placeholder="Type de voiture">
									<span class="fa fa-car form-control-feedback left" aria-hidden="true"></span>
								</div>
							</div>
							<div class="col">
								<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
									<input type="text" class="form-control has-feedback-left" name="nb_ouvruer" placeholder="Nombre de main d'oeuvre">
									<span class="fa fa-male form-control-feedback left" aria-hidden="true"></span>
								</div>
							</div>
                          </div>
						   <div class="form-row">
                           <div class="col"> 
								<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
									<input type="text" class="form-control has-feedback-left" name="nb_place_dispo" placeholder="Nombre d'accompagnant">
									<span class="fa fa-users form-control-feedback left" aria-hidden="true"></span>
								</div>
							</div>
							<div class="col">
								<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
									<input type="text" class="form-control has-feedback-left" name="n_facture" placeholder="N° facture">
									<span class="fa fa-file-text form-control-feedback left" aria-hidden="true"></span>
								</div>
							</div>
                          </div>
						  <h2 class="StepTitle">Information du client</h2>
                          <div class="form-row">
                           <div class="col"> 
								<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
									<input type="text" class="form-control has-feedback-left" name="Nom" placeholder="Nom">
									<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
								</div>
							</div>
							<div class="col">
								<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
									<input type="text" class="form-control has-feedback-left" name="Prenom" placeholder="Prénom">
									<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
								</div>
							</div>
                          </div>
						  <div class="form-row">
                           <div class="col"> 
								<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
									<input type="text" class="form-control has-feedback-left"  name="telClient" placeholder="Téléphone">
									<span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
								</div>
							</div>
							<div class="col"> 
								<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
									<input type="email" class="form-control has-feedback-left"  name="Email" placeholder="Email">
									<span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
								</div>
							</div>
						</div>
														<div class="form-group">
								<input type="hidden" name="id_partenaire" value="<?php echo $id_partenaire ?>" />
								</div>
							
						 <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <a href="formCmdPart.php"><button class="btn btn-danger" type="button">Annuler</button>
						  <button class="btn btn-warning" type="reset">Rénitialiser</button>
                          <button type="submit" class="btn btn-success">Envoyer</button>
                        </div>
                      </div>
                          

                        </form>
						
						
                      </div>
                      
                     
                      
                    </div>
                    <!-- End SmartWizard Content -->
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
    <!-- jQuery Smart Wizard -->
    <script src="../vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
	<!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-datetimepicker -->    
    <script src="../vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>

<script>
    $('#myDatepicker').datetimepicker();
    
    $('#myDatepicker2').datetimepicker({
        format: 'DD.MM.YYYY'
    });
    
    $('#myDatepicker3').datetimepicker({
        format: 'hh:mm A'
    });
    
    $('#myDatepicker4').datetimepicker({
        ignoreReadonly: true,
        allowInputToggle: true
    });

    $('#datetimepicker6').datetimepicker();
    
    $('#datetimepicker7').datetimepicker({
        useCurrent: false
    });
    
    $("#datetimepicker6").on("dp.change", function(e) {
        $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
    });
    
    $("#datetimepicker7").on("dp.change", function(e) {
        $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
    });
</script>
	
  </body>
</html>