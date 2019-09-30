<?php require_once 'session.php'; 
 
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
              <a href="profile.php" class="site_title"><i class="fa fa-paw"></i> <span>Click Tout </span></a>
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
          
            <div class="page-title">
              <div class="title_left">
                <h3>Mon Compte</h3>
              </div>
			        <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right ">
                  
                    
                    <span class="input-group-btn"> 
					 <?php 
	 if ($row['type_admin']==1) {echo'
                      <button type="button" class="btn btn-primary btn-ms"  data-toggle="modal" data-target=".bs-example-modal-lg" >
                                <i class="fa fa-plus-square"> </i> Ajouter Admnistrateur 
                             
					 </button>';} ?>
                    </span>
                  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
						
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">Ajout Admnistrateur </h4>
                        </div>
                        <div class="modal-body">
                         <div class="white-box">
                            <form class="form-horizontal form-material" name="form1" action="ajout_admin_action.php" method="post">
                                <div class="form-group">
                                    <label class="col-md-12">Nom</label>
                                    <div class="col-md-12">
                                        <input type="text" name="nom" class="form-control form-control-line"> </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-email" class="col-md-12">Email</label>
                                    <div class="col-md-12">
                                        <input type="email" name="email" class="form-control form-control-line"> </div>
                                </div>
								 <div class="form-group">
                                    <label for="example-email" class="col-md-12">Login</label>
                                    <div class="col-md-12">
                                        <input type="email" name="login" class="form-control form-control-line"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Mot de passe</label>
                                    <div class="col-md-12">
                                        <input type="password" name="pwd" class="form-control form-control-line"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Téléphone</label>
                                    <div class="col-md-12">
                                        <input type="text" name="telephone" class="form-control form-control-line"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Adresse</label>
                                    <div class="col-md-12">
                                        <input type="text" name="adresse" class="form-control form-control-line">
                                    </div>
                                </div>
                               
                                <div class="form-group">
                                    <div class="col-sm-12">
									<button id="send" type="submit" class="btn btn-success">Ajouter</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                          
                                    </div>
                                </div>
                            </form>
                        </div>
                        </div>
                        <div class="modal-footer">
                         
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>

              
            </div>
            
            <div class="clearfix"></div>

       
             
                    <div class="row">
             <div class="col-md-6 col-sm-6 col-xs-12">
			 
           <div class="x_panel">
                  <div class="x_title">
                    <h2>Super Administrateur <small></small></h2>
                    
                    <div class="clearfix"></div>
                
				 
				 </div>
				  <div class="x_content">			                     
                      
                    
                          <!-- Current avatar -->
						  
						  <div class="white-box">
                            
							<form class="form-horizontal form-material" name="form" action="modif_admin_action.php" method="post">
                                <div class="form-group">
								 <input type="hidden" name="id_admin" value="<?=$id_admin?>"/>
                                    <label class="col-md-12">Nom</label>
                                    <div class="col-md-12">
                                        <input type="text" name="nom" placeholder="<?php echo $row['nom'] ?>" class="form-control form-control-line"> </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-email" class="col-md-12">Email</label>
                                    <div class="col-md-12">
                                        <input type="email" name="email" placeholder="<?php echo $row['email'] ?>" class="form-control form-control-line"> </div>
                                </div>
								 <div class="form-group">
                                    <label class="col-md-12">Login</label>
                                    <div class="col-md-12">
                                        <input type="text" name="adresse" placeholder="<?php echo $row['login'] ?>" class="form-control form-control-line">
                                    </div>
                                <div class="form-group">
                                    <label class="col-md-12">Mot de passe</label>
                                    <div class="col-md-12">
                                        <input type="password" name="pwd" value="<?php echo $row['pwd'] ?>" class="form-control form-control-line"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Téléphone</label>
                                    <div class="col-md-12">
                                        <input type="text" name="telephone" placeholder="<?php echo $row['telephone'] ?>" class="form-control form-control-line"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Adresse</label>
                                    <div class="col-md-12">
                                        <input type="text" name="adresse" placeholder="<?php echo $row['adresse'] ?>" class="form-control form-control-line">
                                    </div>
                                </div>
                                 <div class="form-group">
                            		<div class="col-md-12">		
                                        <button type="submit" class="btn btn-primary"  >Modifier </button>
                                    </div>
                                </div>
							  
                                
                            </form>
                        
                      
					  </div>
					  </div>
					</div>
					</div>
					</div>
					
                 <!--<div class="col-md-6 col-sm-12 col-xs-12 form-group">  -->  
				 <?php
				 if ($row['type_admin']==1) {
	 echo' 
				 <div class="col-md-6 col-sm-6 col-xs-12 form-group pull-right">
				  <div class="x_panel">
                  <div class="x_title">
                    <h2>Administrateur <small></small></h2>
                    
                    <div class="clearfix"></div>
                
				 
				 </div>
				  <div class="x_content">			                     
                      
                    
                          <!-- Current avatar -->
						  
						  <div class="white-box">
                            
					  
		  
                  <table class="table">
    <thead>
      <tr>
        <th>Nom & Prenom </th>
        <th>Login</th>
        <th>Mot de passe</th>
		 <th>Action</th>
      </tr>
    </thead>
    <tbody>';
	
						$sql="select * from administrateur where type_admin=0 ";
						$result = $connect->query($sql);
						if($result->num_rows > 0) {
						while($data=$result->fetch_assoc())
						{  echo'
	<tr>
	<td> '.$data['nom'].' </td>
	<td> '.$data['login'].'</td>
	<td> '.$data['pwd'].' </td>
	<td> 
	 <a href="Sup_admin.php?id_admin='. $data['id_admin'].'">  <button type="button" class="btn btn-warning btn-xs">
                                <i class="fa fa-ban"> </i> Supprimer 
                              </button>
							  </a> 
	</td>
	</tr>
	
	
	';}}} ?>
	
	</tbody>
	</table>
</div>
</div>
                  </div>
                    </div>
                    </div>
					</div>
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