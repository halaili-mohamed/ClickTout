<?php require_once 'db_connect.php'; 
require_once 'sessionPart.php';
 
$sql = "SELECT * FROM partenaire where id_partenaire='$id_partenaire'";
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
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
	
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.js" ></script>
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

	<script >
		$(document).ready(function() {
		$('#example').DataTable({
			"order": [[ 3, "asc" ]],
			columnDefs: [{
			orderable: false,
			targets: 5
			}],
			"language": {
			"search": "Rechercher:",
			"emptyTable":     "Aucune commande disponible",
			"info":           "Affichage de l'élément _START_ à _END_ sur _TOTAL_ éléments",
			"infoEmpty":      " ",
			"lengthMenu":     "Montrer _MENU_ éléments",
			"zeroRecords":    "Aucune commande correspondante trouvée",
			 "loadingRecords": "Chargement...",
			"processing":     "Traitement...",
			 "paginate": {
				"first":      "First",
				"last":       "Last",
				"next":       ">>",
				"previous":   "<<"
					},
			"aria": {
			"sortAscending":  ": Activer pour trier la colonne par ordre croissant",
			"sortDescending": ": Activer pour trier la colonne par ordre décroissant"
					}
			}
		});
		} );
	
	</script>
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
					<li><a href="profilePart.php"><i class="fa fa-user"></i> Mon compte </a>
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
                    <img src="images/<?php echo $row['logo'] ?>.jpg" alt=""><?php echo $row['nom_ste'] ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="profilePart.php"> Mon compte</a></li>
                    
                    
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
				<h3> Liste en attente </h3>
                
              </div>

             
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
				  
                    					
                    
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                   

                      
                      <br />

                      <!-- here -->

                      <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_content">
                   
                      

                      <div class="clearfix"></div>
					 <table id="example" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
						  <thead>
							<tr>
							  <th class="th-sm">N° commande
							  </th>
							  <th class="th-sm">N° facture
							  </th>
							  <th class="th-sm">Client
							  </th>
							  <th class="th-sm">Date
							  </th>
							  <th class="th-sm">Etat
							  </th>
							  <th class="th-sm">Action
							  </th>
							</tr>
						  </thead>
						  <tbody>
						  <?php 
						$sql1="select * from commende where partenaire_id_partenaire={$id_partenaire} and etatCMD in (0,1,2,-1) ";
						$result1 = $connect->query($sql1);

						if($result1->num_rows > 0) {
						while($data = $result1->fetch_assoc()) { 
							$sql2="select * from client where id_client={$data['client_id_client']}";
							$res=$connect->query($sql2);
							$r=$res->fetch_assoc();

						echo '
							<tr>
							  <td> '.$data['n_cmd'].'</td>
							  <td>'.$data['n_facture'].'</td>
							  <td>'.$r['Nom'].' '.$r['Prenom'].'</td>
							  <td>'.$data['Date'].'</td>
							  <td> ' ;
						  if ($data['etatCmd']==1) { echo '
						  <span class="label label-default">Chargée</span> '; } elseif ($data['etatCmd']==2) {
						  echo '<span class="label label-info">Montée à bord</span>';} elseif($data['etatCmd']==3) {
						  echo '<span class="label label-success">Déchargée</span> ';}elseif($data['etatCmd']== -1 ) {
						  echo '<span class="label label-success">Acceptée </span> ';} else {
						  echo '<span class="label label-danger">Annulée</span>' ;}
						   echo '</td>
							  <td> <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#exampleModalLong'.$data['n_cmd'].'">
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
														<li><i class="fa fa-mobile-phone user-profile-icon"></i> Téléphone: '.$r['telClient'].'</li>
														<i class="fa fa-check-square-o user-profile-icon"></i> Etat: ';
														if ($data['etatCmd']==1) { echo '
												  <span class="label label-default">Chargée</span> '; } elseif ($data['etatCmd']==2) {
												  echo '<span class="label label-info">Montée à bord</span>';} elseif($data['etatCmd']==3) {
												  echo '<span class="label label-success">Déchargée</span> ';} elseif($data['etatCmd']== -1 ) {
						  echo '<span class="label label-success">Acceptée </span> ';}else {
												  echo '<span class="label label-danger">Annulée</span>' ;}
														echo'
													  
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
									   
							<a href="annuleCMD.php?id_commende='.$data['id_commende'].'"><button type="button" class="btn btn-danger btn-xs" >
                                <i class="fa fa-times"> </i> Annuler 
                              </button></td>
						</tr> ';}} ?>

						   
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
        
        <!-- /page content -->

        <!-- footer content -->
        <footer>
         
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    

    <!-- jQuery -->
   
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