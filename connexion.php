<?php
       if($bd=mysqli_connect(localhost,root,,click_tout_bd)){
              echo 'connexion réussite !!';
       }
       else{
              die(mysqli_connect_error());
       }
?>