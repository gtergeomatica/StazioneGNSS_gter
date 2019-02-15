<?php

session_start();

$nome_autore = $_SESSION['nomeaut'];

?>


<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
       
       
       
        <style>
        /* NON SERVE A NIENTE */
        #map {
            width: 909px;
            height: 592px;
        }
        </style>
        
        
        <script>
        // qua dentro ci potrei mettere del codice javascript
        
        </script>

        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">



        <link rel="stylesheet" href="../webservice/bootstrap/dist/css/bootstrap.min.css">
        <script src="../webservice/bootstrap/dist/js/bootstrap.min.js"></script>


        <!--script src="https://code.jquery.com/jquery-3.3.1.min.js"></script-->
        <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>

        
        <link rel="stylesheet" href="../webservice/bootstrap-datepicker/dist/css/bootstrap-datepicker.css">
        <script src="../webservice/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>



        <title></title>
    </head>
    <body style="background-color: #e3f2fd;">
	<div class="container">

    
    <div style="text-align: center;">    <h1> Il test è in esecuzione </h1></div>
        
        <div class="row">
		  <!-- //<form action="run_rtklib.php" method="POST"> -->
		 
		 
		 

	
		  
		 <!--  <button type="submit" class="btn btn-primary"> <i class="fas fa-play"></i> salva configurazione e procedi </button> -->
		<!-- </form> -->
        
           
     
        
    
              	<br><div style="text-align: center;"><button type="submit" onClick="location.href='index.php'" class="btn btn-primary">  <i class="fas fa-home"></i> home </button>     </div>	    
       		<br><div class="row">  </div>
       
       </div>   
      
              
  <!-- Footer -->
<footer class="page-footer font-small" style="background-color:#bcd1de; position: absolute;
    width: 100vw;
    bottom: 0vh;">

    <!-- Footer Elements -->
    <div class="container">

      <!-- Grid row-->
      <br><div class="row">

        <!-- Grid column -->
        <div class="col">
          <div class="flex-center align-middle">

            <!-- Facebook -->
            <div style="text-align: center;"><a class="fb-ic" href="https://www.facebook.com/Gteronline" target="_blank">
            <img src="./img/facebook.png" height="30" hspace="50" alt="errore: non carica immagine"> 
            </a>
            <!-- Twitter -->
            <a class="tw-ic"href="https://twitter.com/Gteronline" target="_blank" >
             <img src="./img/twitter.png" height="30" hspace="50"alt="errore: non carica immagine"> 
            </a>
            <!-- Google +-->
            <a class="gplus-ic"href="https://plus.google.com/+GterIt" target="_blank">
              <img src="./img/googleplus.png" height="30" hspace="50" alt="errore: non carica immagine">
            </a>
            <!--Linkedin -->
            <a class="li-ic"href="https://www.linkedin.com/company/gter-srl-innovazione-in-geomatica-gnss-e-gis/" target="_blank">
               <img src="./img/linkedin.png" height="30" hspace="50" alt="errore: non carica immagine">
            </a>
            <!--Github-->
            <a class="git-ic" href="https://github.com/gtergeomatica/StazioneGNSS_gter" target="_blank" >
              <img src="./img/github.png" height="30"  hspace="50"alt="errore: non carica immagine">
            </a>
            <!--Slideshare-->
            <a class="pin-ic"href="https://www.slideshare.net/rmarzocchi84" target="_blank">
              <img src="./img/Slideshare.png" height="30"  hspace="50"alt="errore: non carica immagine">
            </a></div>
          </div>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row-->

  
    <!-- Footer Elements -->

    <!-- Copyright -->
<div class="footer-copyright text-center py-3"> Sito creato con 
      <a href="https://getbootstrap.com/" target="_blank">Bootstrap</a>

<a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/" target="_blank"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-sa/4.0/88x31.png" /></a>   

    </div>
    
    <!-- Copyright -->
  </div>
  </footer>
  <!-- Footer -->

   
  
    

    
     </body>
</html>



<?php


?>
