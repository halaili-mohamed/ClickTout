<?php
require_once 'session.php'; 
$sql = "SELECT * FROM administrateur where id_admin={$id_admin}";
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
              <a href="profile.html" class="site_title"><i class="fa fa-paw"></i> <span>Click Tout </span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img1.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bienvenue,</span>
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
                    <img src="images/img.jpg" alt=""> <?php echo $row['nom'] ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    
                    <li><a href="deconnexion.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
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
                <h3>Reclamation <small> </small></h3>
              </div>

             
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                 

                       

                        <!-- end of user messages -->
						  <?php 
					
						$sql="select * from reclamation order by date_reclamation ASC";
						$result = $connect->query($sql);
						if($result->num_rows > 0) {
					
						while($data=$result->fetch_assoc())
						{
					
						
						echo'
						
                        <ul class="messages">
                          <li> 
                            <img src="images/img.jpg" class="avatar" alt="Avatar">
                            <div class="message_date">
                              <h3 class="date text-info"> '. $data['date_reclamation'].'</h3>
                              <p class="month"></p>
                            </div>
                            <div class="message_wrapper">
                              <h4 class="heading">N° Commande : '. $data['commende_id_commende'].' </h4> 
                              <blockquote class="message"> '. $data['Message'].'</blockquote>
                              <br />
							  <a type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target=".bs-example-modal-sm"><i class="fa fa-folder"></i> Détails </a>
	
	</ul>
							  ';}}?>
							  
							  
						<?php 
						$sql1="select c.Date ,t.nom , cl.nom ,cl.prenom ,cl.telephone , cl.email ,r.id_reclamation
						from reclamation r, commende c , transporteur t,client cl where c.id_commende=r.commende_id_commende and c.transporteur_Id_Transporteur and t.Id_transporteur and cl.id_client=c.client_id_client and r.id_Reclamation=".$data['id_Reclamation']." ";
						$result1 = $connect->query($sql1);
						if($result1->num_rows > 0) {
						while($tab=$result1->fetch_assoc())
						{ echo ' 
						
                             <!-- Small modal -->
	
                 
                  <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">Numéro commande :  '. $tab['n_commende'].' </h4>
						  
                        </div>
                        <div class="modal-body">
						<ul class="list-unstyled">
						        
                               <li><i class="fa fa-check-square-o"></i> Transporteur : '. $tab['t.nom'].' </li>
								<li><i class="fa fa-check-square-o"></i> N° Transporteur : '. $tab['Id_Transporteur'].' </li>
								<li><i class="fa fa-calendar"></i> Adresse depart: '. $tab['Adresse_depart'].' </li>
								<li><i class="fa fa-flag"></i> Adresse arrivé : '. $tab['Adresse_arrive'].' </li> 
								<li><i class="fa fa-clock-o"></i> Date: '. $tab['Date'].' </li>
								<li><i class="fa fa-clock-o"></i> Heure: '. $tab['heure'].' </li>
								 
								<li><i class="fa fa-user"></i> Nom Client: '. $tab['nom'].' '. $tab['prenom'].' </li>
								<li><i class="fa fa-phone"></i> Telephone : '. $tab['telephone'].' </li>
								<li><i class="fa fa-phone"></i> Email : '. $tab['Email'].' </li>
                              
								
								
                              </ul>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                        </div>

                      </div>
                    </div>
                  </div>
				   ';}}?>
                  <!-- /modals -->
              
                         
                          
					
                       

                    </div>
                    <!-- end project-detail sidebar -->

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
    <!-- ECharts -->
    <script src="../vendors/echarts/dist/echarts.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

  </body>
</html>