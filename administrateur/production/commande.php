<?php require_once 'db_connect.php'; 
$id_admin=2;
 
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

<script src="https://code.jquery.com/jquery-2.1.0.js" ></script>
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

	<script >
		$(document).ready(function() {
		$('#example').DataTable({
			
			"order": [[ 3, "desc" ]],
			columnDefs: [{
			orderable: false,
            targets: 5
			}] ,
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
	
	<script>

$(document).ready(function() {
    $('#example').DataTable();
} );
</script>


  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="profile.php" class="site_title"><span>Click Tout </span></a>
            </div>

            <div class="clearfix"></div>

           

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a href="profile.php"><i class="fa fa-user"></i> Mon compte</a>
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
                  <li><a href="commande.php"><i class="fa fa-list-alt"></i> Liste des commandes </a>
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
                    <?php echo $row['login'] ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Mon compte</a></li>
                   
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
				<h3>Offres Acceptées</h3>
                
              </div>
              <div class="title_right">
              </div>
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
				   <h2>Liste des offres Acceptées</h2> 
                  
                      <div class="clearfix"></div>
                  </div>
                  <div class="x_content">    
                      <br />
                     <!-- here -->
                      <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_content">
				  <div class="row">			
					  <table id="example" class="display" style="width:100%">

				    <thead>
    <tr>
      <th>N° Commande</th>
      <th>Date</th>
	  <th>Heure</th>
	  <th>Départ</th>
	  <th>Arrivée</th>
     
	  <th>Etat</th>
	  <th>Détails</th>
    </tr>
  </thead>
  <tbody>
				  <?php 
					$sql1="select * from commende ";
						$result1 = $connect->query($sql1);
						if($result1->num_rows > 0) {
						while($data = $result1->fetch_assoc()) { 
							$sql2="select * from client where id_client={$data['client_id_client']}";
							$res=$connect->query($sql2);
							$r=$res->fetch_assoc();
							
							echo '
    <tr>
      <td>'.$data['n_cmd'].'</td>
      <td>'.$data['Date'].'</td>
	  <td> '. $data['Heure'].'</td>
	  <td> '.$data['Adresse_depart'].'</td>
	  <td> '.$data['Adresse_arrive'].'</td>
    
      
	
		  <td>	';
	  if ($data['etatCmd']== -1) { echo '
												  <span class="label label-success">Accéptée</span>';} elseif ($data['etatCmd']==2) {
												  echo '<span class="label label-warning">Montée à bord</span>';} elseif($data['etatCmd']==1) {
												  echo '<span class="label label-default">Chargée</span> '; }elseif($data['etatCmd']==4) {
												  echo '<span class="label label-danger">Annulée</span> '; }elseif($data['etatCmd']==0) {
												  echo 'Commandée '; } elseif($data['etatCmd']==3) {
												  echo '<span class="label label-info">Déchargée</span> ';} 
	  echo'</td>
	  
	   <td> <!-- Small modal -->
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
													<li><i class="fa fa-calendar "></i> Date: '. $data['Date'].'  </br> </li>
													<li><i class="fa fa-clock-o "></i> Horaire: '. $data['Heure'].' </br> </li>
													<li><i class="fa fa-map-marker"></i> Départ: '.$data['Adresse_depart'].' </br></li>
													<li><i class="fa fa-flag"></i> Arrivée: '.$data['Adresse_arrive'].'</br> </li>
													<li><i class="fa fa-user"></i> Client: '.$r['Nom'].' '.$r['Prenom'].' </br></li>
													<li><i class="fa fa-mobile-phone user-profile-icon"></i> Téléphone: '.$r['telClient'].'</br></li>
													<li><i class="fa fa-check-square-o user-profile-icon"></i> Etat: ';
													if ($data['etatCmd']==-1) { echo '
												  <span class="label label-success">Accéptée</span>';} elseif ($data['etatCmd']==2) {
												  echo '<span class="label label-warning">Montée à bord</span>';} elseif($data['etatCmd']==1) {
												  echo '<span class="label label-default">Chargée</span> '; } elseif($data['etatCmd']==3) {
												  echo '<span class="label label-info">Déchargée</span> ';}			  
												  echo' </div>
												   </li>
												   </ul>
												   <div class="modal-footer">
													  <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
												   </div>
											</div>
													
												  </div>
												</div>
</div>
									
											  <!-- /modals --></td>
    </tr>
  
  '; }}?>
  </tbody>
  <tfoot>
    <tr>
      <th>N° Commande</th>
      <th>Date</th>
	  <th>Heure</th>
	  <th>Départ</th>
	  <th>Arrivée</th>
     
	  <td>Etat</td>
	  <th>Détails</th>
    </tr>
  </tfoot>
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
   
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>
