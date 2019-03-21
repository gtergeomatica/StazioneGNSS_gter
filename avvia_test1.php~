<?php

$pos1_posmode = $_POST['pos1_posmode'];
$cut_off = $_POST['cut_off'];
$pos1_ionoopt = $_POST['pos1_ionoopt'];
$pos1_tropopt = $_POST['pos1_tropopt'];
$pos1_sateph = $_POST['pos1_sateph'];
$pos1_navsys = $_POST['pos1_navsys'];
$out_solformat = $_POST['out_solformat'];
$out_timesys = $_POST['out_timesys'];
$out_timeform = $_POST['out_timeform'];
$out_height = $_POST['out_height'];
$out_geoid = $_POST['out_geoid'];
$outstr1_format = $_POST['outstr1_format'];
$durata_test = $_POST['durata_test'];


session_start();
// recupero nome 
$nomeaut = $_POST['nome_autore'];

$stringa ="{$nomeaut} {$pos1_posmode} {$cut_off} {$pos1_ionoopt} {$pos1_tropopt} {$pos1_sateph} {$pos1_navsys} {$out_solformat} {$out_timesys} {$out_timeform} {$out_height} {$out_geoid} {$outstr1_format} {$durata_test}";


//salvo i dati nella variabile globale
//$_SESSION['nomeaut']=$nomeaut;




echo "nome autore: ".$stringa."<br>";

//ession_start();
// recupero nome 
//$nomeaut = $_POST['nome_autore'];



//salvo i dati nella variabile globale
//$_SESSION['nomeaut']=$nomeaut;





//session_start();
//$nome_autore = $_SESSION['nomeaut'];

//$nome_autore = $_POST['nome_autore'];

error_reporting(E_ALL);

echo "<h2>TCP/IP Connection</h2>\n";

/* Get the port for the WWW service. */
//$service_port = getservbyname('8082', 'tcp');
$service_port = '8082';
/* Get the IP address for the target host. */
$address = gethostbyname('10.0.8.3');

/* Create a TCP/IP socket. */
$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
if ($socket === false) {
    echo "socket_create() failed: reason: " . socket_strerror(socket_last_error()) . "\n";
} else {
    echo "OK.\n";
}

echo "Attempting to connect to '$address' on port '$service_port'...";
$result = socket_connect($socket, $address, $service_port);
if ($result === false) {
    echo "socket_connect() failed.\nReason: ($result) " . socket_strerror(socket_last_error($socket)) . "\n";
} else {
    echo "OK.\n";
}

$in = "evviva";

$out = '';

echo "Sending HTTP HEAD request...";

socket_write($socket, $stringa, strlen($stringa));
echo "OK.\n";

#echo "Reading response:\n\n";
#while ($out = socket_read($socket, 1024)) {
#    echo $out;
#}
#exit;
echo "Closing socket...";
socket_close($socket);
echo "OK.\n\n";


header('Location: avvia_test.php');
?>
