<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <pre>
    <?php
        require_once 'Caneta.php';
        $c1 = new Caneta;
        $c1->modelo = "BIC Cristal";
        $c1->cor = "Azul";
        // ERRO! ATRIBUTO PROTEGIDO/PRIVADO
        // $c1->ponta = 0.5;
        // $c1->tampado = 50;
        
        $c1->rabiscar();
        var_dump($c1);
        // Mudando o atributo protegido ("tampado") através de função pública
        $c1->tampar();
        // Rabiscar tampado não dá!
        $c1->rabiscar();
    ?>
    </pre>
</body>
</html>