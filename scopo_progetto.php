<?php



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
    <body style="background-color: #e3f2fd; height = 100vh">
	<div class="container">

    
       <div class="row">
		<div class="col-2"> </div>
		<div class="col-8">
		<div style="text-align: center;"><h1> Purpose of the project </h1></div>
		 </div>
		<div class="col-2"> </div>
		</div>
        <div class="row">
			<br><article>
			The purpose of this work is the design and the realization of some low cost GNSS permanent stations, working with an open source positioning software. 
			Those stations will be remotely accessible to the public.
			The goals that authors want to achive with the realization of those stations are:
			<ul>
  			<li>to create a test environment for GNSS positioning both in real time and in post-processing, based on open source libraries (RTKLIB);</li>
  			<li>make available an environment to remotely learn how to use RTKLIB software coupled to mass-market GNSS receivers.</li>
  			
			</ul>
      The station will be equipped with u-blox Neo M8T receivers which are multi-constellation (GPS, GLONASS and Galileo) and single frequency, supported by a Tallysman W4721 antenna positioned on a point of known coordinates.  
      The on board processor will be a Raspberry pi3, and  among others softwares it will bring on board the open source software RTKLIB to manage the positioning in real time and the raw data acquisition for post-processing elaborations.


      The low cost receiver (u-blox Neo M8T) and RTKLIB pair shows good potentiality
in satellite positioning; however, sometimes it may not be intuitive to carry out a
good quality positioning due to the large number of parameters to be set for the receiver configuration, and for the positioning mode (RTKLIB side). Hence the idea
to make available to the community a test environment, with profiled remote access, on which it will be possible to carry out positioning tests. The purpose of tests is to allow people to directly experience the sensitivity
of all the parameters, the quality of the positioning, the peculiarities and potentialities of the open source software
RTKLIB.
From a logistical-organizational point of view, a web service will be designed and implemented for the
access management, data download, and configuration visualization.
			</article>        
     
    </div>
    
    <br><div style="text-align: center;"><button type="submit" onClick="location.href='index.php'" class="btn btn-primary">  <i class="fas fa-home"></i> home </button>     </div>	    
       		<br><div class="row">  </div>
       
       </div> 
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
            <!--Instagram-->
            <a class="git-ic" href="https://www.instagram.com/gter_srl/?hl=it" target="_blank" >
              <img src="./img/instagram.png" height="30"  hspace="50"alt="errore: non carica immagine">
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