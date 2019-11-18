<?php require_once 'db_connect.php'; 
require_once 'SessionPart.php';
 
$sql = "SELECT * FROM Transporteur where id_Transporteur={$id_Transporteur}";
$result = $connect->query($sql);
$row = $result->fetch_assoc(); 
$limit=9;
$page=isset($_GET['page']) ? $_GET['page'] : 1;
$start=($page -1 ) * $limit;
$res1 = $connect->query("select count(id_commende) AS id from commende where transporteur_id_Transporteur={$id_Transporteur} ");
$CMDCount=$res1->fetch_assoc();
$total=$CMDCount ['id'];
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
      <link rel="icon" href="images/favicon.png" type="image/ico" />
	  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.js" ></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

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
	
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
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
  </head>


  <body class="nav-md">
  
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="offre_disponible2.php" class="site_title"><span>Click TOUT</span></a>
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

            
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
				<h3>Offres disponibles</h3>
                
              </div>

              <div class="title_right">
               
              </div>
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
				  <h2>Liste des offres disponibles</h2> 		
                   
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
      <th>Détails</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
				  <?php 
						$sql1="select * from commende c , transporteur t where transporteur_id_Transporteur={$id_Transporteur} and c.etatCMD= 0 and c.type_voiture=t.Type_Voiture and  c.Date>= Date(sysdate()) and c.Heure >= Hour(sysdate()) order by c.Date DESC LIMIT $start, $limit";
						$result1 = $connect->query($sql1);
						if($result1->num_rows > 0) {
						while($data = $result1->fetch_assoc()) {
							$sql2="select * from client where id_client={$data['client_id_client']}";
							$res=$connect->query($sql2);
							$r=$res->fetch_assoc();
							
							echo '
    <tr>
      <td>'.$data['n_cmd'].'</td>
	  <td> '.$data['Date'].'</td>
	  <td> '. $data['Heure'].'</td>
	  <td>'.$data['Adresse_depart'].'</td>
	  <td>'.$data['Adresse_arrive'].'</td>
      
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
													<li><i class="fa fa-mobile-phone user-profile-icon"></i> Téléphone: '.$r['TelClient'].'</br></li>
													<li><i class="fa fa-check-square-o user-profile-icon"></i> Etat: ';
													if ($data['etatCMD']==0) {
													echo '<span class="label label-default">En attente</span> ';} 
												  echo'</li>						  
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
									
											  <!-- /modals --></td>
      <td> 
	  <a href="accepter_refuserCMD.php?id_commende='.$data['id_commende'].'&etatCMD=-1"><button type="button" class="btn btn-success btn-xs" >Accépter</a>
	  <a href="accepter_refuserCMD.php?id_commende='.$data['id_commende'].'&etatCMD=4"><button type="button" class="btn btn-danger btn-xs" >Refuser</a>
	  </td>
	  </td>
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
      <th>Détails</th>
      <th>Action</th>
    </tr>
  </tfoot>
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