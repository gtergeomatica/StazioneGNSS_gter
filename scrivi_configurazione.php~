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


session_start();
// recupero nome 
$nomeaut = $_POST['nome_autore'];


//salvo i dati nella variabile globale
$_SESSION['nomeaut']=$nomeaut;





//$pos1_posmode=urlencode($pos1_posmode);
echo "pos1-posmode:".$pos1_posmode."<br>";

$testo_comando_conf="/usr/bin/python ./scrivi_conf_rtkrcv.py {$pos1_posmode} {$nomeaut} {$cut_off} {$pos1_ionoopt} {$pos1_tropopt} {$pos1_sateph} {$pos1_navsys} {$out_solformat} {$out_timesys} {$out_timeform} {$out_height} {$out_geoid} {$outstr1_format}";
echo $testo_comando_conf."<br>";
$comando = shell_exec($testo_comando_conf);

//echo $output;


echo "nome autore: ".$pos1_posmode."<br>";
echo "cut_off:".$cut_off."<br>";
echo "pos1-ionoopt:".$pos1_ionoopt."<br>";
echo "pos1-tropopt:".$pos1_tropopt."<br>";
echo "pos1-sateph:".$pos1_sateph."<br>";
echo "pos1-navsys:".$pos1_navsys."<br>";
echo "formato soluzione: ".$out_solformat."<br>";
echo "sistema riferimento tempo: ".$out_timesys."<br>";
echo "formato tempo: ".$out_timeform."<br>";
echo "altezza: ".$out_height."<br>";
echo "modello geoide: ".$out_geoid."<br>";
echo "formato file di output: ".$outstr1_format."<br>";


echo "nome autore: ".$nomeaut."<br>";
//$Comando0='cd /var/www/html/stazione_gnss';
//$Comando='/usr/bin/python scrivi_conf_rtkrcv.py 2>&1';

//exit;


//esempio che lancia python sul server dove sono io 


//echo $Comando;
//exit;
//$error = array();
//unset($error);
//$error = shell_exec($Comando0);
//$error = shell_exec($Comando);
//$error = shell_exec("ls");
//echo "<br><br><br> output error:|".$error."|\n";





//esempio che lancia python via ssh da includere dentro shell_exec 
//sshpass -p "gtervpm2018" ssh vpm@78.47.55.144 python script_python/leggi_breve_vel_media_trasf_$siglam.py -i breve-termine/vtrasf${sigla}_${datacopia}_${oracopia}.dat &




?>
<?php


header('Location: avvia_test.php');

?>


