<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Plantilla</title>
</head>
<body>
    <?php 
        $num1 = 5;
        $num2 = 10;
        $num3 = 5;
        $num4 = 20;
        $num5 = 5;
        $activo1 = true;
        $activo2 = false;
        
        //també funciona and
        if($num1 == $num3 && $num3 == $num4){
            echo "Iguales ";
            echo "<br>";
        }
        //tambe funciona or
        if($num1 == $num3 || $num3 == $num5){
            echo "Iguales ";
            echo "<br>";
        }

        if($num1 == $num3 xor $num3 == $num4){
            echo "Iguales ";
            echo "<br>";
        }
        if(!$activo2){
            echo "Dentro";
        }
    
    ?>    
</body>
</html>