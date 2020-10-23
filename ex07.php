<!-- 7. A biblioteca de uma universidade deseja fazer uma página para que o funcionário entre com o nome do livro que será emprestado, categoria do livro (Suspense, romance, literatura brasileira, biografia e fantasia) use um <select>, o tipo de usuário (professor ou aluno) use <radio>. Imprima um recibo com as informações inseridas e mostre 10 dias para devolução se for professor ou 3 dias se for aluno. 
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2 align="center">Atividade 7</h2>
    <center>
    <form method="GET"> 
    Nome do Livro:<input type="text"name="nome"size="30"><br><br>
    Categoria:<select name="cat">
  <option value="Suspense">Suspense</option> 
  <option value="Ação" >Ação</option>
  <option value="Aventura" >Aventura</option>
  <option value="Romance" >Romance</option> 
  <option value="Terror" >Terror</option>
  <option value="Sci-fi" >Sci-fi</option>
</select><br><br>
    Usuário:<input type="radio" Value ="Aluno" name="usu">Aluno
            <input type="radio" Value ="Professor" name="usu">Professor<br><br>
    <input type="submit" value="Confirmar"><br><br>
</form>
<?php
$usu = $_GET['usu'];
$nome = $_GET['nome'];
$cat = $_GET['cat'];
switch ($usu) {
    case "Aluno":
        echo "Nome: $nome<br>Categoria: $cat<br>Usuário: $usu <br> Devolução: 3 dias";
    break;
    case "Professor":
        echo "Nome: $nome<br>Categoria: $cat<br>Usuário: $usu <br> Devolução: 10 dias";
    break;
}
?>   
</center>
</body>
</html>
