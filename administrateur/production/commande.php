<?php 
 
require_once 'session.php'; 
$sql = "SELECT * FROM administrateur where id_admin='$id_admin'";
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
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<link rel="stylesheet" crossorigin="anonymous" href="https://gc.kis.v2.scr.kaspersky-labs.com/E3E8934C-235A-4B0E-825A-35A08381A191/abn/main.css">
<script src="https://code.jquery.com/jquery-2.1.0.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>



<script>

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
		});;
} );
</script>
<style id="__web-inspector-hide-shortcut-style__" type="text/css">
.__web-inspector-hide-shortcut__, .__web-inspector-hide-shortcut__ *, .__web-inspector-hidebefore-shortcut__::before, .__web-inspector-hideafter-shortcut__::after
{
    visibility: hidden !important;
}
</style>
  </head>

  


  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="profile.php" class="site_title"><i class="fa fa-paw"></i> <span>Click Tout </span></a>            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img1.jpg" alt="..." class="img-circle profile_img">              </div>
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
                  <li><a href="commande.php"><i class="fa fa-list-alt"></i> Les commandes </a>				  </li>
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

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>              </a>            </div>
            <!-- /menu footer buttons -->
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
                    <img src="images/img.jpg" alt=""> <?php echo $row['nom'] ?>
                    <span class=" fa fa-angle-down"></span>                  </a>
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
                <h3>TRANSPORTEUR</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right ">
                  
                    
                    <span class="input-group-btn"> <a href="ajout_transporteur.php">
                      <button type="button" class="btn btn-primary btn-ms" >
                                <i class="fa fa-plus-square"> </i> Ajouter transporteur                              </button></a>                    </span>                </div>
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
						
						</nav>
                      </div>

                      <div class="clearfix"></div>
 <div id="example_wrapper" class="dataTables_wrapper">

 
 <table id="example" class="display dataTable" style="width: 100%;" role="grid" aria-describedby="example_info">
                <thead>
                    <tr role="row">
<th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 130px;">N° Commande </th>
<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 212px;">Etat de commande </th>
<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 92px;">Date de commande </th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 36px;">N° transporteur</th>
<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 71px;">Type de voiture </th>
<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 84px;">Type de client </th>
<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 71px;">Nom client </th>
<th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 130px;">N° Facture </th>

</tr>
                </thead>
			
  <tbody>
  <?php 
						$sql="select c.n_cmd ,c.transporteur_Id_Transporteur, c.etat_cmd,c.Date,c.type_voiture,c.typeClient,c.n_facture, p.nom_ste from commende c , partenaire p where partenaire_id_partenaire=id_partenaire";
						$result = $connect->query($sql);
						if($result->num_rows > 0) {
						while($data=$result->fetch_assoc())
						{echo'
		<tr role="row">
		<td >'.$data['n_cmd'].'</td>';
      					if ($data['etat_cmd']==-1)
						 { echo'
							<td><span class="label label-primary">Acceptée</span>
							 </td> ';}
						elseif ($data['etat_cmd']== 1){
								echo'  <td class="">
								chargée </td>';}
						elseif($data['etat_cmd']== 2)
							{
							 echo'<td><span class="label label-danger">Montée a bord</span>
								</td>';}
						elseif($data['etat_cmd']== 3)
							{
							 echo'<td>
							<span class="label label-success">
								Décharger </span> </td>';}
						else  {
						echo'<td><span class="label label-danger">
								Annuler </span></td>'
						 ;}
						echo'
      <td>  '.$data['Date'].'</td>
      <td>  '.$data['transporteur_Id_Transporteur'].'</td>
      <td>  '.$data['type_voiture'].'</td>';
	  if ($data['typeClient']==0)
						 { echo'
							<td>Client
							 </td> <td> </td>';}
						else{
								echo'  <td class="">
								Partenaire  </td>
								 <td>  '.$data['nom_ste'].' </td>';}
								 echo'
	  
	   
	    <td>  '.$data['n_facture'].'</td>
	 
						
					 ';}} ?>
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