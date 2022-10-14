<?php
$nomeTemp = $_FILES['userfile']['tmp_name'];
$nomeF = $_FILES['userfile']['name'];

$comodo = $_POST['comodo'];

if(is_dir($comodo)) {

}else{
    mkdir($comodo);
}

$parInfo = pathinfo("$nomeF");

$ext = $parInfo['extension'];

$extp = array("jpg", "jpeg", "png"); 

if (in_array($ext, $extp)) {
    
    $ctr = move_uploaded_file($nomeTemp,$comodo."/".$nomeF);

if($ctr){
    echo"Upload realizado!";
}else {
    echo"Upload não realizado!";
}
}
else { 
    echo "Extensão não permitida";
}

echo "<br><a href='galeria.php'> Galeria de Imóveis </a></br>";
