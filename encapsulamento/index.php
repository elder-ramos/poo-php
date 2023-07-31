<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h1>Controle</h1>
    <?php
        require_once 'controleRemoto.php';
        $c = new ControleRemoto();
        //$c->ligar();
        $c->maisVolume();
        $c->abrirMenu();
    ?>
</body>
</html>