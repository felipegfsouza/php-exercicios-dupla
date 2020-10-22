<!-- Criar uma página para o usuário entrar com 3 números, os possíveis lados de um triângulo, e imprimir a classificação de acordo com tamanho dos lados -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
       <form method="post" action="#">
			<label>V1: </label>
			<input type="text"  name="V1" /><br />

			<label>V2: </label>
			<input type="text"  name="V2" /><br />

			<label>V3: </label>
			<input type="text"  name="V3" /><br />
			<input type="submit" value="OK" />
		</form>

		<?php
		if($_POST["V1"]!="" and $_POST["V2"]!="" and $_POST["V3"]!=""){
			

			

			if ($_POST["V1"]==$_POST["V2"] and $_POST["V2"]==$_POST["V3"]) {
				echo "<br>Equilatero";
			}elseif ($_POST["V1"]!=$_POST["V3"] and $_POST["V1"]!=$_POST["V2"] and $_POST["V2"]!=$_POST["V3"]){
					echo "<br>Escaleno";
			}else{
				echo "<br>Isosceles";
			}

		}else{
			echo "digite um valor";
		}
		?>

    </center>
<

</body>
</html>

<?php 

?>