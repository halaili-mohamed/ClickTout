<?php 
 
require_once 'session.php'; 
$sql = "SELECT * FROM administrateur where id_admin='$id_admin'";
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
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<link rel="stylesheet" crossorigin="anonymous" href="https://gc.kis.v2.scr.kaspersky-labs.com/E3E8934C-235A-4B0E-825A-35A08381A191/abn/main.css">
<script src="https://code.jquery.com/jquery-2.1.0.js" ></script>
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
              <a href="profile.php" class="site_title"><span>Click Tout </span></a>            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
           
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a href="profile.php"><i class="fa fa-user"></i> Mon compte </a>				  </li>
			    </ul>
               
                   
                  </li>
				   <ul class="nav side-menu">
                  <li><a href="gestion_transporteur.php"><i class="fa fa-truck"></i> Gestion des transporteurs  </a>				  </li>
				  </ul>
                     <ul class="nav side-menu">
                  <li><a href="gestion_partenaire.php"><i class="fa fa-users"></i> Gestion des partenaires </a>				  </li>
				  </ul>
				    <ul class="nav side-menu">
                  <li><a href="commande.php"><i class="fa fa-list-alt"></i> Liste des commandes </a>				  </li>
				  </ul>
				   <ul class="nav side-menu">
                  <li><a href="reclamation.php"><i class="fa fa-frown-o"></i> Reclamation </a>				  </li>
				  </ul>
				   <ul class="nav side-menu">
                  <li><a a href="index.php"><i class="fa fa-bar-chart"></i> Dashboard </a>				  </li>
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
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                     <?php echo $row['nom'] ?>
                    <span class=" fa fa-angle-down"></span>                  </a>
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
                <h3>Liste des Trasnporteurs</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right ">
                  
                    
                    <span class="input-group-btn"> <a href="ajout_transporteur.php">
                      <button type="button" class="btn btn-primary btn-ms" >
                                <i class="fa fa-plus-square"> </i> Ajouter transporteur </button></a>                    </span>                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_content">
                    <div class="row">
                      <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                       
                      </div>

                      <div class="clearfix"></div>
 <div id="example_wrapper" class="dataTables_wrapper">

 
 <table id="example" class="display dataTable" style="width: 100%;" role="grid" aria-describedby="example_info">
                <thead>
                    <tr role="row">
<th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 130px;">N° transporteur </th>
<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 212px;">Nom & prenom </th>
<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 92px;">Email</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 36px;">Adresse</th>
<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 84px;">Matricule</th>
<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 71px;">Type de voiture </th>
<th> ACTION </th></tr>
                </thead>
			
  <tbody>
  <?php 
						$sql="select * from transporteur";
						$result = $connect->query($sql);
						if($result->num_rows > 0) {
						while($data=$result->fetch_assoc())
						{echo'
<tr role="row">
		<td >'.$data['Id_Transporteur'].'</td>
      <td>'.$data['Nom'].' '.$data['Prenom'].' </td>
      <td>  '.$data['Email'].'</td>
      <td>  '.$data['Adresse'].'</td>
      <td>  '.$data['Matricule'].'</td>
      <td>  '.$data['Type_Voiture'].'</td>
	  <td> <div class="btn-group">
      <a href="profile_transporteur.php?Id_Transporteur='.$data['Id_Transporteur'].'&Nom='.$data['Nom'].' &Prenom='.$data['Prenom'].' &Adresse='.$data['Adresse'].' &Email='.$data['Email'].' &Pseudo='.$data['Pseudo'].'&Date_naiss='.$data['Date_naiss'].' &Matricule='.$data['Matricule'].' &Type_Voiture='.$data['Type_Voiture'].' &Password= '.$data['Password'].'&Cin= '.$data['Cin'].'&Pseudo= '.$data['Pseudo'].'"><button type="button" class="btn btn-info btn-xs"> <i class="fa fa-user">
                                </i> </button></a>
      <a href="offres_transporteur.php?Id_Transporteur='. $data['Id_Transporteur'].' &Nom='.$data['Nom'].' &Prenom='.$data['Prenom'].'">  <button type="button" class="btn btn-primary btn-xs">
                                <i class="fa fa-table"> </i> Offres
                              </button>
							  </a>
	 ';
							  
							 if ($data['Etat_compte']==0)
							  { echo '
							  <a href="desactif_transp.php?Id_Transporteur='. $data['Id_Transporteur'].'">  <button type="button" class="btn btn-danger btn-xs">
                                <i class="fa fa-"> </i> Desactiver
                              </button>
							  </a> '
							  ;}
							  else 
							  {echo '
							  	  <a href="actif_transp.php?Id_Transporteur='. $data['Id_Transporteur'].'">  <button type="button" class="btn btn-success btn-xs">
                                <i class="fa fa-"> </i> Activer
                              </button>
							  </a>
							  
							  </div>
</td>
						
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