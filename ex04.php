<!--Exercicios 4-->
<!--Entrar com 3 números e imprimi-los em ordem decrescente (suponha números diferentes)-->
<DOCTYPE html>
<html lang="pt-br">
<head>
     <meta charset="UTF-8"/>
	 <title> Exercicio 3 </title>
</head>
<body>
<div>

    <center>
        
        <form method="GET" >
            numero1: <input type="number" name="num1"
            placeholder="Digite o primeiro numero"><br><br>

            numero2: <input type="number" name="num2"
            placeholder="Digite o segundo numero"><br><br>

            numero3: <input type="number" name="num3"
            placeholder="Digite o terceiro numero"><br><br>

            <input type="submit" value="verificar">
        </form>
   


	     <?php 
		     $numero1 = isset($_GET['num1'])?$_GET['num1']:0;
			 $numero2 = isset($_GET['num2'])?$_GET['num2']:0;
			 $numero3 = isset($_GET['num3'])?$_GET['num3']:0;
			 //$dec= array($numero1);
			 $matr = array($numero1, $numero2, $numero3);
			 rsort($matr);
             print_r($matr);
         ?>
         
    </center>
</div>
</body>