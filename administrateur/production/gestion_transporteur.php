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

<script>

$(document).ready(function() {
    $('#example').DataTable();
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
 <div id="example_wrapper" class="dataTables_wrapper">
 <div class="dataTables_length" id="example_length">
 <label>Show <select name="example_length" aria-controls="example" class=""><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label>
 </div>
 <div id="example_filter" class="dataTables_filter">
 <label>Search:<input type="search" class="" placeholder="" aria-controls="example"></label>
 </div>
 
 <table id="example" class="display dataTable" style="width: 100%;" role="grid" aria-describedby="example_info">
                <thead>
                    <tr role="row">
<th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 130px;">Name</th>
<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 212px;">Position</th>
<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 92px;">Office</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 36px;">Age</th>
<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 84px;">Start date</th>
<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 71px;">Salary</th>
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
      <td>'.$data['nom'].' '.$data['Prenom'].' </td>
      <td>  '.$data['Email'].'</td>
      <td>  '.$data['Adresse'].'</td>
      <td>  '.$data['Matricule'].'</td>
      <td>  '.$data['Type_Voiture'].'</td>
	  <td> <div class="btn-group">
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
</td>
						
					  ';}}?>
					  
					  
		 
		 </tbody>

		</table>			  
				<div class="dataTables_info" id="example_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>	  
				<div class="dataTables_paginate paging_simple_numbers" id="example_paginate"><a class="paginate_button previous disabled" aria-controls="example" data-dt-idx="0" tabindex="0" id="example_previous">Previous</a><span><a class="paginate_button current" aria-controls="example" data-dt-idx="1" tabindex="0">1</a><a class="paginate_button " aria-controls="example" data-dt-idx="2" tabindex="0">2</a><a class="paginate_button " aria-controls="example" data-dt-idx="3" tabindex="0">3</a><a class="paginate_button " aria-controls="example" data-dt-idx="4" tabindex="0">4</a><a class="paginate_button " aria-controls="example" data-dt-idx="5" tabindex="0">5</a><a class="paginate_button " aria-controls="example" data-dt-idx="6" tabindex="0">6</a></span><a class="paginate_button next" aria-controls="example" data-dt-idx="7" tabindex="0" id="example_next">Next</a></div>	  
					  
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