<!-- 1. Criar uma página que leia 2 números e efetue a adição.
- Caso o valor somado seja maior que 20, este deverá ser apresentada somando-se a ele mais 8;
- Caso o valor somado seja menor ou igual a 20, este deverá ser apresentado subtraindo-se 5 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2 align="center">Atividade 1 </h2>
    <center>
        <form method="POST">
             informe os valores: <br><br>
        <input type="text" name="v1" size="20"><br><br>
        <input type="text" name="v2" size="20"><br><br>
        <input type="submit" value="calcular">
        </form>
        <?php 
        $v1=$_POST['v1'];
        $v1=$_POST['v2'];
        $v3=$v2+$v1;
        if($v3>20){
            $v4 = $v3 + 8;
        }
        if($v3<=20){
            $v4 = $v3 -5;
        }
        echo "Resultado: $v4";
        ?>
    </center>
</body>
</html>