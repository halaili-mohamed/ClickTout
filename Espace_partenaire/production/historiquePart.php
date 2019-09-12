<?php 

$localhost = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "click_tout";

// create connection
$connect = new mysqli($localhost, $username, $password, $dbname);

// check connection
if($connect->connect_error) {
	die("connection failed : " . $connect->connect_error);
} else {
 //echo'<script language="javascript"> 
		//alert("Successfully Connected");
		
		///script>';
}

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
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">

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
					<li><a href="profilePart.php"><i class="fa fa-user"></i> Mon compte </a> </li>
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
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/.jpg" alt="">yser name
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
         <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Historique</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Rechercher...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Historique</h2>
                    <ul class="nav navbar-right panel_toolbox">
                       <li class="dropdown">
                       <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> Trier par  <i class="fa fa-sort"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#"><i class="fa fa-sort-amount-desc"></i> La plus récente </a>
                          </li>
                          <li><a href="#"> <i class="fa fa-sort-amount-asc"></i> La plus ancienne </a>
                          </li>
                        </ul>
                      </li>
                      
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <!-- start project list -->
                    <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <th style="width: 10%">N° commande</th>
                          <th>Nom client</th>
                         
						  <th>Date</th>
                          <th>Etat</th>
						  
                          <th style="width: 20%">Action</th>
                        </tr>
                      </thead>


                      <tbody>
                        <tr>
                          <td>234</td>
                          <td>Samuel Doe</td>

						  <td>24 mai </td>
                          
                          <td> 
						  <span class="label label-default">Chargée</span>
						  <span class="label label-info">Montée à bord</span>
						  <span class="label label-success">Déchargée</span>
						  <span class="label label-danger">Annulée</span>
						  </td>
                          <td>
                             <!-- Small modal -->
								  <a type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target=".bs-example-modal-sm"><i class="fa fa-folder"></i> Détails </a>
                 
                  <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2"><h4 class="heading"><b>Commande n°: 234</b></h4></h4>
                        </div>
                        <div class="modal-body">
                          <ul class="messages">
                          <li>
                            <div class="message_wrapper">
                            
                            
                              
							  
                              <li>
							    <i class="fa fa-calendar "></i>  Date:  24 mai  </br> 
							    <li><i class="fa fa-clock-o "></i>  Horraire:  10H  </li>
								
								<li><i class="fa fa-map-marker"></i> Départ: San Francisco, California, USA </br></li>
								
								<li><i class="fa fa-flag"></i> Destination: San Francisco, California, USA </li>
								<li><i class="fa fa-user"></i> Client: Samuel Doe </br></li>
								<i class="fa fa-mobile-phone user-profile-icon"></i> Téléphone: 21331A2312
								
							  
                              <br />
                              
                            </div>
                          </li>
						  
						  
                         
                          
                        </ul>
						<div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                          
                        </div>
                        </div>
                        

                      </div>
                    </div>
                  </div>
                  <!-- /modals -->
                            
                            
                          </td>
                        </tr>
                       
                      </tbody>
                    </table>
                    <!-- end project list -->

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