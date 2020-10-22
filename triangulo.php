<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
        $ladoa = 0;
        $ladob = 0;
        $ladoc = 0;
        if(isset($_POST["enviar"])){
            $ladoa = $_POST["ladoa"];
            $ladob = $_POST["ladob"];
            $ladoc = $_POST["ladoc"];
            echo "<h1>Valores informados</h1>";
            echo "<h2>Ladoa A: $ladoa </h2>";
            echo "<h2>Ladoa B: $ladob </h2>";
            echo "<h2>Ladoa C: $ladoc </h2>";
            if(($ladoa+$ladob>$ladoc)&&($ladoa+$ladoc>$ladob)&&($ladoc+$ladob>$ladoa)){
                echo "<h2>Os valores representam o lado de um triangulo </h2>";  
            }
            else{
                echo "<h2>Os valores representam os lados de um triangulo </h2>";
            }

        }
    ?>
    <p><a href="ex05.php">Triangulo</a></p>
</body>
</html>