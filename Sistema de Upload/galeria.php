<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title> Galeria de Imóveis </title>
    <style type="text/css">
        body{
            margin-top: 100px;
            margin-bottom: 100px;
            background-color: #ffcccc;;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }
        #sala{
              margin: 0 auto;
              text-align: center;
              border-radius: 10px;
              font-size: xx-large;
              font-family: Georgia, 'Times New Roman', Times, serif;
              font-weight: bolder;
            }

            #quarto{
              margin: 0 auto;
              text-align: center;
              border-radius: 10px;
              font-size: xx-large;
              font-family: Georgia, 'Times New Roman', Times, serif;
              font-weight: bolder;
            }

            #cozinha{
              margin: 0 auto;
              text-align: center;
              border-radius: 10px;
              font-size: xx-large;
              font-family: Georgia, 'Times New Roman', Times, serif;
              font-weight: bolder;
            }
        
        .container{
            display: grid;
            grid-row-gap: 20px;
        }
        .row{
            display: grid;
            grid-template-columns: auto auto auto auto;
            grid-column-gap: 30px;
            }
        .col{
            border: 4px solid #ffcccc;
            height: 33.3vh;
            width: 25vw;

        }
        img{
            height: 33.3vh;
            width: 25vw;
        }
    </style>
</head>
<body>
<center><div id="main"><i><h1>Galeria de Imóveis</h1></i></div></center>
  <br>
<?php

$link01 = "Sala/Sala1";
$link02 = "Sala/Sala2";
$link03 = "Sala/Sala3";
$link04 = "Quarto/Quarto1";
$link05 = "Quarto/Quarto2";
$link06 = "Quarto/Quarto3";
$link07 = "Cozinha/Cozinha1";
$link08 = "Cozinha/Cozinha2";
$link09 = "Cozinha/Cozinha3";

?>

    <div class="container">
    <center> <div id="sala"> Sala </div> </center>
        <div class="row">
            <div class="col"><img src="<?=$link01?>" ></div>
            <div class="col"><img src="<?=$link02?>" ></div>
            <div class="col"><img src="<?=$link03?>" ></div>
        </div>
        <center> <div id="quarto"> Quarto </div> </center>
        <div class="row">
            <div class="col"><img src="<?=$link04?>" ></div>
            <div class="col"><img src="<?=$link05?>" ></div>
            <div class="col"><img src="<?=$link06?>" ></div>
        </div>
        <center> <div id="cozinha"> Cozinha </div> </center>
        <div class="row">
            <div class="col"><img src="<?=$link07?>" ></div>
            <div class="col"><img src="<?=$link08?>" ></div>
            <div class="col"><img src="<?=$link09?>" ></div>
        </div>
        
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</script>
</body>
</html>
