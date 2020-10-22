<!-- Criar uma página para o usuário entrar com 3 números, os possíveis lados de um triângulo, e imprimir a classificação de acordo com tamanho dos lados -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id="form1" name="form1" method="POST" action="triangulo.php">
    <p>
        <label for="ladoa">Lado A </label>
        <input type="text" name="ladoa" id="ladoa">
    </p>
    <p>
        <label for="ladoa">Lado B </label>
        <input type="text" name="ladob" id="ladob">
    </p>
    <p>
        <label for="ladoa">Lado C</label>
        <input type="text" name="ladoc" id="ladoc">
    </p>
    <p>
        <input type="submit" name="enviar" id="enviar" value="Enviar">
    </p>
    </form>
   
</body>
</html>