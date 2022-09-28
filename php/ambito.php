<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ambito</title>
</head>
<body>
    <?php 
    //ambito
    $numero = 22;
    function prueba(){
        global $numero; // per fer variables globals
        echo $numero; // ha d'estar definida a dedins;
    }
    prueba();
    
    ?>    
</body>
</html>