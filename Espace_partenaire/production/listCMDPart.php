<?php require_once 'db_connect.php'; 
session_start();

if (isset($_SESSION["id_partenaire"])){
$id_partenaire=$_SESSION["id_partenaire"];}
else{
	
header("location:login.php");	
}
 
$sql = "SELECT * FROM partenaire where id_partenaire='$id_partenaire'";
$result = $connect->query($sql);
$row = $result->fetch_assoc(); 

$limit=9;
$page=isset($_GET['page']) ? $_GET['page'] : 1;
$start=($page -1 ) * $limit;

$res1 = $connect->query("select count(id_commende) AS id from commende where partenaire_id_partenaire={$id_partenaire} ");
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
							  <th class="th-sm">Name
							  </th>
							  <th class="th-sm">Position
							  </th>
							  <th class="th-sm">Office
							  </th>
							  <th class="th-sm">Age
							  </th>
							  <th class="th-sm">Start date
							  </th>
							  <th class="th-sm">Salary
							  </th>
							</tr>
						  </thead>
						  <tbody>
							<tr>
							  <td>Tiger Nixon</td>
							  <td>System Architect</td>
							  <td>Edinburgh</td>
							  <td>61</td>
							  <td>2011/04/25</td>
							  <td>$320,800</td>
							</tr>
							
						    <tr>
      <td>Garrett Winters</td>
      <td>Accountant</td>
      <td>Tokyo</td>
      <td>63</td>
      <td>2011/07/25</td>
      <td>$170,750</td>
    </tr>
    <tr>
      <td>Ashton Cox</td>
      <td>Junior Technical Author</td>
      <td>San Francisco</td>
      <td>66</td>
      <td>2009/01/12</td>
      <td>$86,000</td>
    </tr>
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