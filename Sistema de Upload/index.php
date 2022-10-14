<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Controle de Upload de Imagens </title>
</head>
<body>
    <h2>Controle de Upload de Imagens </h2>
    <form enctype="multipart/form-data" method="post" action="upload.php">
        <p> Nome do diretório:
         <input type="text" name="comodo">
        </p>
        <p> <input name="userfile" type="file" /> </p>
        <p> <button type="submit"> Enviar arquivo </button> </p>
    </form>
    <form method="post" action="read.php">
    <p> Digite o cômodo: <input type="text" name="btDeletar"></p>
    <p><button type="submit"> Deletar arquivos </button></p>
    </form>
</body>
</html>