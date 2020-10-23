<!-- 3. Criar uma página para o usuário entrar com - nome,
- sexo
- ano atual
- ano de nascimento de uma pessoa.
Se a pessoa for do sexo feminino e tiver menos que 25 anos, imprimir nome e a mensagem: ACEITA. Caso contrário, imprimir nome e a mensagem: NÃO ACEITA.
-->
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
    <form method="POST">
        Inscrição <br><br>
    Nome: <input type="text" name= "nome" size="20"><br><br>
    Sexo: <input type="radio" value= "Masculino" name="sexo">Masculino<br><br>
          <input type="radio" value= "Feminino" name="sexo">Feminino<br><br>
    Ano Atual: <input type="text" name="AT" size="20"><br><br>
    Ano Nascimento: <input type="text" name="AN" size="20"><br><br>

    <input type="submit" value="Confirmar"><br><br>
</form>
<?php 
    $sexo=$_POST['sexo'];
    $at=$_POST['AT'];
    $an=$_POST['AN'];
    $idade=$at - $an ;
    if ($idade<=25) {
        if ($sexo == "Feminino") {
                echo "Aceita";
        }else{
            echo "Não aceita";
        } 
    } else{
        echo"Não aceita";
   }
?>

    </center>
  
</body>
</html>