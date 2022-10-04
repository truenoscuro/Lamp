<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Referencias</title>
</head>
<body>
    <?php 
    $numero = 1;
    //NO CANVIA EL VALOR QUE LI PASES
    function sinReferencia($num){ ++$num ;}
    sinReferencia($numero);
    echo $numero . "<br>";
    //AIXÒ SI 
    function conReferencia(&$num){ ++$num; }
    conReferencia($numero);
    echo $numero . "<br>";
    ?>    
</body>
</html>