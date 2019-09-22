<?php require_once 'db_connect.php'; 
$id_Transporteur=1;
$limit=15;
$page=isset($_GET['page']) ? $_GET['page'] : 1;
$start=($page -1 ) * $limit;
$res1 = $connect->query("select count(id_commende) AS id from commende where transporteur_id_Transporteur={$id_Transporteur} ");
$CMDCount=$res1->fetch_assoc();
$total=$CMDCount ['id'];
$pages=ceil($total/$limit);
$previous=$page - 1;
$next=$page + 1;
if (isset($_GET['recherche']) and !empty($_GET['recherche'])) {
	$q=htmlspecialchars($_GET['recherche']);
	$rech=$connect->query('select * from commende where Tansporteur_id_Transporteur='.$id_Transporteur.'
							and n_cmd like "%'.$q.'%" '); 
	$resRech=$rech->fetch_assoc();
	
	
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
      <link rel="icon" href="images/favicon.png" type="image/ico" />
    <title>Espace transporteur</title>

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
              <a href="offre_dispo2.html" class="site_title"><i class="fa fa-cube"></i> <span>Click TOUT</span></a>
            </div>

            <div class="clearfix"></div>
            <br />
            <!-- sidebar menu -->
           <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a href="profile.php"><i class="fa fa-user"></i>Mon compte</a></li>
				  <li><a href="offre_disponible.php"><i class="fa fa-bell-o"></i>Offre diponible</a></li>
				  <li><a href="offre_accepte.php"><i class="fa fa-thumbs-o-up"></i>Offre accépté</a></li>
				  <li><a href="ReclamationPart.php"><i class="fa fa-comments-o"></i> Réclamation</a></li>
                  <li><a href="historiquePart.php"><i class="fa fa-clock-o"></i>Historiques</a></li>
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
					$sql = "SELECT * FROM Transporteur where id_Transporteur={$id_Transporteur}";
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
                <h3>Historique</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <form method="GET" action="HistorRechPart.php">
				  <div class="input-group">
				  
                    <input type="search" class="form-control" name="recherche" placeholder="Rechercher...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                    </span>
					</div>
				   </form>
                  
                </div>
              </div>
            </div>
 
            <div class="clearfix"></div>
            <div class="clearfix"></div>
            <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    
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
				  <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                        <nav aria-label="Page navigation">
							  <ul class="pagination justify-content-center">
								<li class="page-item">
								  <a class="page-link" href="historiquePart.php?page=<?= $previous; ?>" aria-label="Previous">
									<span aria-hidden="true">&laquo;</span>
									<span class="sr-only">Previous</span>
								  </a>
								</li>
								<?php for  ($i = 1; $i<=$pages;$i++) : ?>
									<li class="page-item"><a class="page-link" href="historiquePart.php?page=<?= $i; ?>"><?= $i; ?></a></li>
								<?php endfor ?>
								<li class="page-item">
								  <a class="page-link" href="historiquePart.php?page=<?= $next; ?>" aria-label="Next">
									<span aria-hidden="true">&raquo;</span>
									<span class="sr-only">Next</span>
								  </a>
								</li>
							  </ul>
							</nav>
                   </div>

				  <div class="row">
              
			<div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                  <div class="x_title">
                  <h2>Consulter historique</h2>
                 
                  <div class="clearfix"></div>
                </div>
                 
                  <div class="x_content">
                    <!-- start project list -->
                    <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <th>N° commande</th>
                          <th>Nom client</th>  
						  <th>Etat</th>
						  <th>Date</th>
                          <th style="width: 20%">Action</th>
                        </tr>
                      </thead>
					  
                      <tbody>
						<?php 
						$sql1="select * from commende where transporteur_id_Transporteur={$id_Transporteur} and etatCMD in (3,4)LIMIT $start, $limit";
						$result1 = $connect->query($sql1);
						if($result1->num_rows > 0) {
						while($data = $result1->fetch_assoc()) {
							$sql2="select * from client where id_client={$data['client_id_client']}";
							$res=$connect->query($sql2);
							$r=$res->fetch_assoc();
							
							echo '
                     
					  
                        <tr>
                          <td>'.$data['n_cmd'].'</td>
                          <td>'.$r['Nom'].' '.$r['Prenom'].'</td>
						  <td>'.$data['Date'].' </td>
                          
                          <td>' ;
						 														if ($data['etatCMD']==1) { echo '
												  <span class="label label-default">Chargée</span> '; } elseif ($data['etatCMD']==2) {
												  echo '<span class="label label-info">Montée à bord</span>';} elseif($data['etatCMD']==-1) {
												  echo '<span class="label label-success">Accépté</span>';} elseif($data['etatCMD']==3) {
												  echo '<span class="label label-warning">Déchargée</span> ';} else {
												  echo '<span class="label label-danger">Annulée</span>' ;}
							echo '</td> 
                          <td>
                             <!-- Small modal -->
							 <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#exampleModalLong'.$data['n_cmd'].'">
								<i class="fa fa-folder"></i> Détails
							</button>
														  
							 <div class="modal fade" id="exampleModalLong'.$data['n_cmd'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
						  										<div class="modal-dialog modal-sm">
											<div class="modal-content">
												<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
												</button>
												<h4 class="modal-title" id="myModalLabel2"><h4 class="heading"><b>Commande n° '.$data['n_cmd'].'</b></h4></h4>
												</div>
												<div class="modal-body">
													<ul class="messages">
													<li>
													<div class="message_wrapper">
													<li>
														<i class="fa fa-calendar "></i> Date: '. $data['Date'].'  </br> 
														<li><i class="fa fa-clock-o "></i> Horaire: '. $data['Heure'].' </li>
														
														<li><i class="fa fa-map-marker"></i> Départ: '.$data['Adresse_depart'].' </br></li>
														
														<li><i class="fa fa-flag"></i> Destination: '.$data['Adresse_arrive'].' </li>
														<li><i class="fa fa-user"></i> Client: '.$r['Nom'].' '.$r['Prenom'].' </br></li>
														<li><i class="fa fa-mobile-phone user-profile-icon"></i> Téléphone: '.$r['TelClient'].'</li>
														<li><i class="fa fa-check-square-o user-profile-icon"></i> Etat: ';
														if ($data['etatCMD']==1) { echo '
												  <span class="label label-default">Chargée</span> '; } elseif ($data['etatCMD']==2) {
												  echo '<span class="label label-info">Montée à bord</span>';} elseif($data['etatCMD']==-1) {
												  echo '<span class="label label-success">Accépté</span>';} elseif($data['etatCMD']==3) {
												  echo '<span class="label label-warning">Déchargée</span> ';} else {
												  echo '<span class="label label-danger">Annulée</span>' ;}
							echo '</li>
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
													</tr> '; 
						}}
					  ?>
					   </tbody>

                    </table>
                    <!-- end project list -->

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
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>