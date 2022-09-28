<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Arrays</title>
</head>
<body>
    <?php 
        //Arrays

        $dias = array("Dilluns", "Dimarts", "Dimecres", "Dijous", "Divendres","Disabte","Diumenge");
        $temperaturas= [23,13,41,10];
        $vacio = array(15); // array amb 15 posicions buides
        $datos = array(); //array sense res definit encara.

        echo  $dias[1];
        echo "<p> </p>";
        echo $temperaturas[0];
        echo "<br>";
        echo "<br>";
        //funcio var_dump per veure mes explicit ses dades dels arrays
        var_dump($dias);
        echo "<br>";
        var_dump($temperaturas);
    
    
    ?>    
</body>
</html>