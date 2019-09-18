<?php require_once 'db_connect.php'; 
$id_admin=2;
 
$sql = "SELECT * FROM administrateur where id_admin={$id_admin}";
$result = $connect->query($sql);
$row = $result->fetch_assoc(); 
$limit=2;
$page=isset($_GET['page']) ? $_GET['page'] : 1;
$start=($page -1 ) * $limit;
$res1 = $connect->query("select count(id_transporteur) AS id from transporteur ");
$transCount=$res1->fetch_assoc();
$total=$transCount ['id'];
$pages=ceil($total/$limit);
$previous=$page - 1;
$next=$page + 1;
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
                    <li><a href="login.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
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
                <h3>TRANSPORTEUR</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right ">
                  
                    
                    <span class="input-group-btn"> <a href="ajout_transporteur.php">
                      <button type="button" class="btn btn-primary btn-ms" >
                                <i class="fa fa-plus-square"> </i> Ajouter transporteur 
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
                      <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                        <nav aria-label="Page navigation">
							  <ul class="pagination justify-content-center">
								<li class="page-item">
								  <a class="page-link" href="gestion_transporteur.php?page=<?= $previous; ?>" aria-label="Previous">
									<span aria-hidden="true">&laquo;</span>
									<span class="sr-only">Previous</span>
								  </a>
								</li>
								<?php for  ($i = 1; $i<=$pages;$i++) : ?>
									<li class="page-item"><a class="page-link" href="gestion_transporteur.php?page=<?= $i; ?>"><?= $i; ?></a></li>
								<?php endfor ?>
								<li class="page-item">
								  <a class="page-link" href="gestion_transporteur.php?page=<?= $next; ?>" aria-label="Next">
									<span aria-hidden="true">&raquo;</span>
									<span class="sr-only">Next</span>
								  </a>
								</li>
							  </ul>
							</nav>
                      </div>

                      <div class="clearfix"></div>
  <?php 
						$sql="select * from transporteur";
						$result = $connect->query($sql);
						if($result->num_rows > 0) {
						while($data=$result->fetch_assoc())
						{echo'
						
						
                      <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                        <div class="well profile_view">
                          <div class="col-sm-12">
                            <h4 class="brief"><i> N° Transporteur :  '.$data['Id_Transporteur'].'</i></h4>
                            <div class="left col-xs-7">
                              <h2>'.$data['nom'].' '.$data['Prenom'].'</h2>
                              <p><strong> </strong>  </p>
                              <ul class="list-unstyled">
                                <li><i class="fa fa-building"></i> Email: '.$data['Email'].' </li>
                                <li><i class="fa fa-phone"></i> Type de voiture : '.$data['Type_Voiture'].' </li>
                              </ul>
                            </div>
                            <div class="right col-xs-5 text-center">
                              <img src="images/img.jpg" alt="" class="img-circle img-responsive">
                            </div>
                          </div>
                          <div class="col-xs-12 bottom text-center">
                       
                            <div class="col-xs-12 col-sm-6 emphasis">
							<div class="btn-group">
                              <a href="profile_transporteur.php?Id_Transporteur='.$data['Id_Transporteur'].'&nom='.$data['nom'].' &Prenom='.$data['Prenom'].' &Adresse='.$data['Adresse'].' &Email='.$data['Email'].' &psudo='.$data['psudo'].'&Date_naiss='.$data['Date_naiss'].' &Matricule='.$data['Matricule'].' &Type_Voiture='.$data['Type_Voiture'].' &PWD= '.$data['PWD'].' "><button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
                                </i> </button></a>
                             <a href="offres_transporteur.php?Id_Transporteur='. $data['Id_Transporteur'].' &nom='.$data['nom'].' &Prenom='.$data['Prenom'].'">  <button type="button" class="btn btn-primary btn-xs">
                                <i class="fa fa-table"> </i> Offres
                              </button>
							  </a>
							   <a href="Sup_transporteur.php?Id_Transporteur='. $data['Id_Transporteur'].'">  <button type="button" class="btn btn-danger btn-xs">
                                <i class="fa fa-"> </i> Supprimer
                              </button>
							  </a>
							  </div>
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