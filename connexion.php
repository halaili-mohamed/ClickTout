<?php
       if($bd=mysqli_connect(localhost,root,,click_tout)){
              echo 'connexion réussite !!';
       }
       else{
              die(mysqli_connect_error());
       }
?>