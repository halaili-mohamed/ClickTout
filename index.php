<?php

 require_once 'connect.php';
 include ("paypal.php") ;

?> 



<!DOCTYPE html>
<html lang="en">
  <head>
	<link rel="icon" href="images/icon.png" type="image/ico" />
    
	<title>ClickTOUT| Je tranporte pour vous </title>

    

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
	
	    <link rel="stylesheet" href="css/owl.carousel1.min.css">
    <link rel="stylesheet" href="css/owl.theme1.default.min.css">


	 <link rel="stylesheet" href="css/style1.css">
	   <script src="js/jquery.min.js"></script>
	 
	 <style type="text/css">
	.input-group.md-form.form-sm.form-2 input.amber-border {
border: 1px solid #ffca28;
}
 </style>

		
	<script> 
	$(document).ready(function(){
		  $("#panel").show();
		 
		  $("#b1").click(function(){
			$("#panel1").slideDown("slow");
			$("#panel").slideUp("slow");
		 
			  $('#li1').html( "Adresse Départ: "+$('#Adresse_depart').val()); 
					$('#li2').html( "Adresse Destination: "+$('#Adresse_arrive').val());
					$('#li3').html("Date: "+ $('#Date').val());
					$('#li4').html("Heure: "+ $('#Heure').val()); 
					$('#in_kilo').html("Distance is Kilo: "+ $('#in_kilo').val());
		  });

		  $("#b2").click(function(){
			$("#panel2").slideDown("slow");
			$("#panel1").slideUp("slow");
		  });
		  $("#b3").click(function(){
			$("#panel3").slideDown("slow");
			$("#panel2").slideUp("slow");
		  });

		  
			$("#b5").click(function(){
			$("#panel").slideDown("slow");
			$("#panel1").slideUp("slow");
		  });
		  $("#b6").click(function(){
			$("#panel1").slideDown("slow");
			$("#panel2").slideUp("slow");
		  });
		   $("#b7").click(function(){
			$("#panel2").slideDown("slow");
			 $("#panel3").slideUp("slow");
		  });
  
	});
	</script>

			<script>
		$(document).ready(function(){
		  $("#bs").click(function(){
		    $("#s").load("search.php?num="+$("#num").val()+"");
		  });
		});
		</script>
	<style> 
		#panel, #flip,#panel1, #flip1,#panel2, #flip2,#panel3, #flip3,#flip4 {
		  padding: 5px;
		  text-align: center;
		  background-color: #e5eecc;
		  border: solid 1px #c3c3c3;
		}

		#flip4 {
	  padding: 5px;
	  text-align: center;
	  font-size: larger;
	  background-color: #fc983c ;
	  border: solid 1px #c3c3c3;
		}

		#panel,#panel1,#panel2,#panel3{
		  background-color: white;
		  display: none;
		}

		.sizeimage{
			width: 200px;
			height: 200px;
		}
	</style>

<style type="text/css"></style>
  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php"><img src="images/logo_ctt_final.png"></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">

	          <li class="nav-item active"><a href="index.php" class="nav-link">Accueil</a></li>
	          <li class="nav-item"><a href="#about" class="nav-link">Nos services</a></li>
	          <li class="nav-item"><a href="#part" class="nav-link">Nos partenaires</a></li>
			   <li class="nav-item"><a href="#rech" data-target="#rech"  data-toggle="modal" class="nav-link">Votre Commande</a></li>
	          <li class="nav-item"><a href="#contact" class="nav-link">Contactez-nous</a></li>

		
	        </ul>
	      </div>
	    </div>
	  </nav>



	  <div class="modal" tabindex="-1" role="dialog" id="rech">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Votre commande</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

	
     
      <div class="modal-body">
       
		  
		  	<div id="s">
			  <input class="form-control mr-sm-5" type="text" placeholder="Search" id="num" aria-label="Search">
			  <button id="bs" class="btn btn-outline-warning btn-rounded btn-sm my-0" type="button">Search</button>
		    </div>
		  

      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
   
    </div>
  </div>
</div>
    <!-- END nav -->
    
    <div class="hero-wrap" style="background-image: url('images/camions-parking.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center">
          <div class="col-lg-6 col-md-6 ftco-animate d-flex align-items-end">
          	<div class="text">
	            <h1 class="mb-4"> <span>Je transporte pour vous</span></h1>
	            <p style="font-size: 18px;"></p>
	            <a href="#reserver" >
	            	<CENTER>
					<div class="col-lg-6"><button  id="res" value="following" class="btn btn-primary btn-lg btn-block"><B style="font-size: 20px;">RESERVER</B></button></div>
	            	</CENTER>
	            </a>
            </div>
			
          </div>
          
         
        </div>
      </div>
    </div>

	 <!--Our Services  --> <br> 
    <section class="ftco-section services-section ftco-no-pt ftco-no-pb" id="about">
      <div class="container">
      	<div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
          	<span class="subheading">Nos Services</span>
            <h2 class="mb-2">Nos Services sont..</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
              	<div class="d-flex mb-3 align-items-center">
	              	<div class="icon"><span class="flaticon-customer-support"></span></div>
	                <h3 class="heading mb-0 pl-3">sécurisés</h3>
                </div>
                <p></p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
              	<div class="d-flex mb-3 align-items-center">
	              	<div class="icon"><span class="flaticon-route"></span></div>
	                <h3 class="heading mb-0 pl-3">rapides</h3>
                </div>
                <p></p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
              	<div class="d-flex mb-3 align-items-center">
	              	<div class="icon"><span class="flaticon-online-booking"></span></div>
	                <h3 class="heading mb-0 pl-3">ponctuels</h3>
                </div>
                <p></p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
              	<div class="d-flex mb-3 align-items-center">
	              	<div class="icon"><span class="flaticon-rent"></span></div>
	                <h3 class="heading mb-0 pl-3">disponibles 24/7</h3>
                </div>
                <p></p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>

	 <!--Work flow  --> <br> 
    <section class="ftco-section services-section img" style="background-image: url(images/transport.jpg);">
    	<div class="overlay"></div>
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
          	<span class="subheading"></span>
            <h2 class="mb-3">Comment ça marche?</h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services services-2">
              <div class="media-body py-md-4 text-center">
              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span></div>
                <h3>Choisissez votre destination</h3>
                <p>D'abord, vous allez choisir votre destination ainsi que la date et l'horaire de votre commande</p>
              </div>
            </div>      
          </div>
		   <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services services-2">
              <div class="media-body py-md-4 text-center">
              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-rent"></span></div>
                <h3>Chosissez la véhicule</h3>
                <p>Choisissez ensuite le type de véhicule selon vos besoins et indiquez</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services services-2">
              <div class="media-body py-md-4 text-center">
              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-select"></span></div>
                <h3>Confirmer votre commande</h3>
                <p>Enfin, vérifiez les informations saisies et confirmez votre commande</p>
              </div>
            </div>      
          </div>
         
          <!-- <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services services-2">
              <div class="media-body py-md-4 text-center">
              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-review"></span></div>
                <h3>Enjoy The Ride</h3>
                <p>A small river named Duden flows by their place and supplies it with you</p>
              </div>
            </div>      
          </div> -->
    		</div>
    	</div>
    </section>

	 <!--Réservation  --> <br> 
    <section class="ftco-section ftco-no-pb ftco-no-pt" id="reserver">
    	<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 heading-section text-center ftco-animate mb-5">
					<span class="subheading">Reservation</span>
					<h2 class="mb-2">Reservation</h2>
				</div>
			</div>
			 <form method="POST" id="distance_form">
			 
			 
				<div id="flip">1. La destination et la date de votre commande</div>

				<div id="panel">
					<center>
					<div class="form-row ">
					<div class="col-md-2"></div>
					<div class="form-group col-md-4">
					  <label for="Adresse_depart">Départ</label>
					  <input type="text" class="form-control"  name="Adresse_depart" id="Adresse_depart" placeholder="Votre Adresse Départ" >
   					 <input id="origin" name="origin" required="" type="hidden" />
					</div>
					<div class="form-group col-md-4">
					  <label for="Adresse_arrive">Destination</label>
					  <input type="text" class="form-control" name="Adresse_arrive" id="Adresse_arrive" placeholder="Votre Adresse Destination">
					  <input id="destination" name="destination" required="" type="hidden" />
					</div>
				  </div>
				  </center>
				  
				  <div class="form-row ">
					<div class="col-md-2"></div>
					<div class="form-group col-md-4">
					  <label for="Date">Date</label>
					  <input type="date" class="form-control" id="Date" >
					</div>
					<div class="form-group col-md-4">
					  <label for="Heure">Horaire</label>
					  <input type="time" class="form-control" id="Heure" >
					</div>
					</div>

					<center>

					<div class="form-row ">
						<div class="col-md-5"></div>
						<div class="col-md-2">
					 <button type="submit" id="b1" class="btn btn-primary custom-next">Suivant</button></div>
					

					</div>
					
				 </center>
					
					</div>

				<div id="flip1">2. Vos coordonnées</div>

				<div id="panel1">

				<div class="form-row ">
					<div class="col-md-2"></div>
					<div class="form-group col-md-4">
					  <label for="Nom">Nom</label>
					  <input type="text" class="form-control" id="Nom" placeholder="Votre nom">
					</div>
					<div class="form-group col-md-4">
					  <label for="Prenom">Prénom</label>
					  <input type="text" class="form-control" id="Prenom" placeholder="Votre prénom">
					</div>
				  </div>
				  
				  
				  <div class="form-row ">
					<div class="col-md-2"></div>
					<div class="form-group col-md-4">
					  <label for="example-date-input">Téléphone</label>
					  <input type="tel" class="form-control" id="Phone" placeholder="Votre numéro téléphone" >
					</div>
					<div class="form-group col-md-4">

					  <label for="Email">Adresse e-mail</label>
					  <input type="email" class="form-control" id="Email" placeholder="Votre adresse e-mail">

					</div>
					</div>
					 <div class="form-row ">
					 <div class="col-md-5"></div>

					 <button  id="b5"  class="btn btn-primary custom-next">retour</button> <div class="col-md-1"></div>
					 <button  id="b2"  class="btn btn-primary custom-next">suivant</button>

					
					 <div class="col-md-4"></div>

					
				  </div>
				  
							</div>
							
									

				<div id="flip2">3. Des informations supplémentaires</div>

				<div id="panel2">
						
											<div><label>De quelle Type de véhicule aurez-vous besoin ?</label></div>
									<center>	
									
									 <div class="form-row">
                           <div class="col"> 
								<div class="form-group">
                        
									<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
										  <select name="type_voiture" id="type_voiture" class="form-control"  >
											<option hidden> 	Type de véhicule</option>
											<option value="1">6m³</option>
											<option value="2">9m³</option>
											<option value="3">12m³</option>
											<option value="4">20m³</option>
										  </select>
										</div>
									  </div>
								</div>
							</div>
									</center>
									

						

							<div ><label >Voudrez-vous un coup de main pour monter votre chargement chez vous?   <label></div>
							
							
							<center>
					
									 <div class="form-row">
                           <div class="col"> 
								<div class="form-group">
                        
									<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
									  <select name="nb_ouvruer" id="nb_ouvruer" class="form-control"  >
											<option hidden>Nombre de main d'oeuvre</option>
											<option value="1">un</option>
											<option value="2">deux</option>
											
										  </select>
										</div>
									  </div>
								</div>
							</div>
							</center>		
					
					
										<div><label>Choisisez le temps de chargement et de déchargement<label></div>
								<center>
 							<div class="form-row">
                           		<div class="col"> 
									<div class="form-group">
                        
									<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
										  <select name="T_chargement" id="T_chargement" class="form-control"  >
											<option hidden>Temps de chargement et de déchargement</option>
											<option value="1">20min</option>
											<option value="2">+1h</option>
											<option value="2">+2h</option>
										  </select>
									</div>
									</div>
								</div>
							</div>
								</center>


			<p><B><u style="color:red;">REMARQUE:</u> le transport est trottoir à trottoir uniquement</p></B>


							<div>
										<button  id="b6"  class="btn btn-primary custom-next">retour</button>

										 <button  id="b3"  class="btn btn-primary custom-next">suivant</button>

					</div>
				</div>
					
					
					
					
					
					<div id="flip3">4. Paiement</div>
				<div id="panel3">
					
					  <div  id="paypal-button-container">
  	

  
    <script src="https://www.paypal.com/sdk/js?client-id=sb"></script> 
    <script>
		paypal.Buttons({
    		createOrder: function(data, actions) {
      			return actions.order.create({
        purchase_units: [{
          amount: {
            value: '150',
            
          }
        }]
      });
    },
    onApprove: function(data, actions) {
      // Capture the funds from the transaction
      return actions.order.capture().then(function(details) {
        // Show a success message to your buyer
        alert('Transaction completed by ' + details.payer.name.given_name);
      });
    }
  }).render('#paypal-button-container');
    </script>
  		</div>
		
		
					<div>
					<button  id="b7"  class="btn btn-primary custom-next">retour</button>
					
					</div>
					
					</div>
					
			
			<div id="flip4">
				 <div class="col-md-3" ><h1>Prix : 100$</h1> </div>
			 
             <div id="result" class="col-md-7" style="text-align: ;">
                  <ul id="list" class="list-group" >
                 <li id="li1" >Adresse Départ</li>
                 <li id="li2">Adresse Destination</li>
                 <li id="li3">Date</li>

                 <li id="li4">Horaire</li>
                 
                 
                 <input id="in_kilo" name="Distance" required="" type="hidden" />


                  </ul> 
             </div>  
				

			</div>
					
				
</form>	
						</div>
    </section>

	
    <section class="ftco-section testimony-section" id="part">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Partenaires</span>
            <h2 class="mb-3">Nos Partenaires</h2>
          </div>
        </div>
       
	   <div>
        <div class="owl-carousel nonloop-block-13 "> 

	 <?php 
	 $query= "select distinct logo,nom_ste,siteweb from partenaire   ";
	 $r= mysqli_query($connect,$query);
	 if (mysqli_num_rows($r)>0 ) {
	 	
	 	
	 	while ($row=mysqli_fetch_array($r)) {
	 		
	 		?>
	    
              <div class="card " >
              	
                <img  src="<?php echo $row["logo"]; ?>" alt="Image" class="sizeimage" />

                <div class="card-body">
                  <div class="card-title">
                  <h3><a href="https://<?php echo $row["siteweb"]; ?>"><?php echo $row["nom_ste"]; ?></a></h3>
                  
                  
                  </div>
               
              </div>
</div>

              
            
         
           <?php } }?> 
     </div> </div></div>
    </section>

		<section class="ftco-section contact-section" id ="contact">
      <div class="container">
	   <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
          <span class="subheading">Contactez-nous</span>
            <h2 class="mb-3">Contactez-nous</h2>
          </div>
        </div>
        <div class="row d-flex mb-5 contact-info justify-content-center">
        	<div class="col-md-8">
        		<div class="row mb-5">
		          <div class="col-md-4 text-center py-4">
		          	<div class="icon">
		          		<span class="icon-map-o"></span>
		          	</div>
		            <p><span>Adresse:</span> ...</p>
		          </div>
		          <div class="col-md-4 text-center border-height py-4">
		          	<div class="icon">
		          		<span class="icon-mobile-phone"></span>
		          	</div>
		            <p><span>Téléphone:</span> <a href="tel://1234567920">..</a></p>
		          </div>
		          <div class="col-md-4 text-center py-4">
		          	<div class="icon">
		          		<span class="icon-envelope-o"></span>
		          	</div>
		            <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
		          </div>
		        </div>
          </div>
        </div>
        <div class="row block-9 justify-content-center mb-5">
          <div class="col-md-8 mb-md-5">
          	<h2 class="text-center">Si vous avez des problèmes <br> n'hésitez pas à nous envoyer une réclamation</h2>
            <form action="ajouterReclamation.php" method="POST" class="bg-light p-5 contact-form">
              
              <div class="form-group">
                <input type="text" class="form-control" id="n_cmd" name="n_cmd" placeholder="Numéro de Commande">
              </div>
              <div class="form-group">
                <textarea  id="Message" cols="30" rows="7" name="Message" class="form-control" placeholder="votre Réclamation"></textarea>
              </div>
			
              <div class="form-group ">
                <input type="submit" value="Envoyer" class="btn btn-primary py-3 px-5" id="bRec">
              </div>
            </form>
          
          </div>
        </div>
        
      </div>
    </section>

	
	
	
	
	
	
	  <!--ESPACE transporteur  -->
	
	<div class="modal" tabindex="-1" role="dialog" id="espaceTras">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Accès Transporteur</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

	   <form id="f_t" action="loginTransp.php" method="POST">
      <div class="modal-body">
       
	   
		<div class="form-group">
            <label for="psudo" class="col-form-label">Email:</label>
            <input type="text" class="form-control" id="psudo1" name="psudo1">
        </div>


		<div class="form-group">
            <label for="PWD" class="col-form-label">Mot de passe:</label>
            <input type="Password" class="form-control" id="PWD1" name="PWD1">
        </div>

      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Se connecter</button>
        
      </div>
      </form>
    </div>
  </div>
</div>


      <!--ESPACE PARTENAIRE   -->
	<div class="modal" tabindex="-1" role="dialog" id="espacePar">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Accès Partenaire</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

	   <form id="f_p" action="loginPart.php" method="POST">
      <div class="modal-body">
       
	   
	 		

		<div class="form-group">
            <label for="psudo" class="col-form-label">Email:</label>
            <input type="text" class="form-control" id="psudo" name="psudo">
        </div>


		<div class="form-group">
            <label for="PWD" class="col-form-label">Mot de passe:</label>
            <input type="Password" class="form-control" id="PWD" name="PWD">
        </div>
       
		
		

		
      </div>
      <div class="modal-footer">
        <button type="submit" name="submit" class="btn btn-primary">Se connecter</button>
        
      </div>
      </form>
    </div>
  </div>
</div>






	
    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">A propos de nous..</h2>
              <p>[Présentation...]</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Menu </h2>
              <ul class="list-unstyled">
          
                <li><a href="#about" class="py-2 d-block">Nos services</a></li>
                <li><a href="#" class="py-2 d-block">Comment ça marche?</a></li>
				<li><a href="#espacePar" data-target="#espacePar"  data-toggle="modal" class="py-2 d-block">Accès PARTENAIRE</a></li>
                <li><a href="#espaceTras" data-target="#espaceTras"  data-toggle="modal" class="py-2 d-block">Accès TRANSPORTEUR</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><script>document.write(new Date().getFullYear());</script>  <i class="icon-heart color-danger" aria-hidden="true"></i> 
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>



  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
  
  <script src="js/jquery-3.3.1.min.js"></script>
   <script src="js/owl.carousel1.min.js"></script>
    <script src="js/aos1.js"></script>

 
 
     <script src="js/main1.js"></script>

	 
	 <script>
    $(function() {
        // add input listeners
        google.maps.event.addDomListener(window, 'load', function () {
            var Adresse_depart = new google.maps.places.Autocomplete(document.getElementById('Adresse_depart'));
            var Adresse_arrive = new google.maps.places.Autocomplete(document.getElementById('Adresse_arrive'));

            google.maps.event.addListener(Adresse_depart, 'place_changed', function () {
                var from_place = Adresse_depart.getPlace();
                var from_address = from_place.formatted_address;
                $('#origin').val(from_address);
            });

            google.maps.event.addListener(Adresse_arrive, 'place_changed', function () {
                var to_place = Adresse_arrive.getPlace();
                var to_address = to_place.formatted_address;
                $('#destination').val(to_address);
            });

        });
        // calculate distance
        function calculateDistance() {
            var origin = $('#origin').val();
            var destination = $('#destination').val();
            var service = new google.maps.DistanceMatrixService();
            service.getDistanceMatrix(
                {
                    origins: [origin],
                    destinations: [destination],
                    travelMode: google.maps.TravelMode.DRIVING,
                    unitSystem: google.maps.UnitSystem.IMPERIAL, // miles and feet.
                    // unitSystem: google.maps.UnitSystem.metric, // kilometers and meters.
                    avoidHighways: false,
                    avoidTolls: false
                }, callback);
        }
        // get distance results
        function callback(response, status) {
            if (status != google.maps.DistanceMatrixStatus.OK) {
                $('#result').html(err);
            } else {
                var origin = response.originAddresses[0];
                var destination = response.destinationAddresses[0];
                if (response.rows[0].elements[0].status === "ZERO_RESULTS") {
                    $('#result').html("Better get on a plane. There are no roads between "  + origin + " and " + destination);
                } else {
                    var distance = response.rows[0].elements[0].distance;
                    var duration = response.rows[0].elements[0].duration;
                    console.log(response.rows[0].elements[0].distance);
                    var distance_in_kilo = distance.value / 1000; // the kilom
                    var distance_in_mile = distance.value / 1609.34; // the mile
                    var duration_text = duration.text;
                    var duration_value = duration.value;
                    $('#in_mile').text(distance_in_mile.toFixed(2));
                    $('#in_kilo').text(distance_in_kilo.toFixed(2));
                    $('#duration_text').text(duration_text);
                    $('#duration_value').text(duration_value);
                    $('#from').text(origin);
                    $('#to').text(destination);
                }
            }
        }
        // print results on submit the form
        $('#distance_form').submit(function(e){
            e.preventDefault();
            calculateDistance();
        });

    });

</script>
	 
		    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBWB7FS-Rj2l62b6zkfhEKa1SMOu0q6-mk&libraries=places">
</script>



  </body>
</html>