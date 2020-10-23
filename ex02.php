<!-- 2. Criar uma página para o usuário entrar com um número e informar se ele é divisível por 10, por 5, por 2 ou se não é divisível por nenhum destes -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2 align="center">Atividade 2</h2>
    <center>
        <form action="GET">
             informe os valores <br><br>
             <input type="text" name="v1" size="20"><br><br>
             <input type="submit" value="Calcular"><br><br>
        </form>
        <?php 
        $v1=$_GET['v1'];

        if ($v1%2 == 0){
            echo"O numero é divisível por 2";
        } elseif ($v1%5 == 0) {
            echo "O número é divisivel por 5 ";
        } elseif ($v1%10 == 0) {
            echo "O número é divisivel por 10,5e 2";
        }else {
            echo"Não é divisívwl por 10,5 e 2";
        }
        ?>
    </center>
    
</body>
</html>