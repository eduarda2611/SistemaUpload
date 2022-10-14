<form action="index.php" method="post">
    <?php
    $delet = $_POST['btDeletar'];
    if(is_dir($delet)){
        $comodo = scandir($delet);
        array_shift($comodo);
        array_shift($comodo);
        foreach($comodo as $comodo){
            unlink("$delet/$comodo");
        }
        rmdir($delet);
    }
    echo "Arquivos deletados!"
    ?>
</form>
