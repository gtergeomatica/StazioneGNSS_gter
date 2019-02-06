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
    <body>
	<div class="container">

    
       <div class="row">
		<div class="col-2"> </div>
		<div class="col-8">
		<div style="text-align: center;"><h1> Scopo del progetto </h1></div>
		 </div>
		<div class="col-2"> </div>
		</div>
        <div class="row">
			<article>
			Oggetto del presente lavoro è la progettazione per la realizzazione di una stazione GNSS low cost,
			basata su un software di posizionamento open source, la quale sarà accessibile al pubblico da remoto.
			Gli obiettivi che si vogliono raggiungere grazie alla realizzazione di questa stazione sono:
			<ul>
  			<li>realizzare un ambiente di test per il posizionamento GNSS sia in tempo reale che in post-
processamento, basato su librerie open source (RTKLIB);</li>
  			<li>rendere disponibile un ambiente per imparare a usare da remoto il software RTKLIB
accoppiato a ricevitori GNSS mass-market.</li>
  			
			</ul>
La stazione sarà equipaggiata con ricevitori u-blox Neo M8T i quali sono multi-costellazione (GPS,
GLONASS e Galileo) e singola frequenza, supportati da un’antenna Tallysman W4721 posizionata
su un punto di coordinate note. Il processore a bordo della stazione sarà un Raspberry pi3 che tra gli
altri porterà a bordo il software open source RTKLIB per gestire il posizionamento in real time e
l’acquisizione di dati grezzi per il post-processing.
L’accoppiata ricevitore a basso costo (u-blox Neo M8T) e RTKLIB mostra delle buone potenzialità
nel posizionamento satellitare; tuttavia a volte può risultare poco intuitivo effettuare un
posizionamento di qualità a causa del grande numero di parametri da settare sia per la
configurazione del ricevitore, sia per la modalità del posizionamento (lato RTKLIB). Da qui l’idea
di rendere disponibile alla comunità un ambiente di test, ad accesso profilato e remoto, su cui sarà
possibile effettuare test di posizionamento di vario genere, sperimentando direttamente la sensitività
dei parametri, la qualità del posizionamento, le peculiarità e potenzialità del software open source
RTKLIB.
Da un punto di vista logistico-organizzativo verrà progettato e realizzato un servizio web per la
gestione degli accessi, per lo scaricamento dati, e per la visualizzazione delle configurazioni.
			</article>        
     
    </div>
    </body>
    <footer>

<div style="text-align: center;">    <button type="submit" onClick="location.href='index.php'" class="btn btn-primary">  <i class="fas fa-home"></i> home </button></div>
       
  

</footer>        
        
</html>


<?php


?>