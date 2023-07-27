<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <pre>
    <?php
        require_once 'Caneta.php';

        $c1 = new Caneta("BIC", "Azul", 0.5);
        
        // Modelo também pode ser mudado diretamente!
        // $c1->modelo = "BIC";
        // Ponta NÃO pode ser mudado diretamente (é privado)
        // $c1->ponta = 0.75
        var_dump($c1);
    ?>
    </pre>
</body>
</html>