<!-- Ler um número inteiro entre 1 e 12 e escrever o mês correspondente. Caso o número esteja fora desse intervalo, informar que não existe mês com este número. Use switch case. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 align="center">Calendário</h1>
    <p align="center">
        <img src="https://www.flaticon.com/svg/static/icons/svg/42/42415.svg" width="100" height="100">
    </p>
    <center>
        <form  method="post">


         Mês :<input type="number" name="number"
         palaceholder="Digite um mes de 1 a 12"><br><br>
        

            <input type="submit" value="Calendário">
        </form>
        <br>
    </center>

    <?php 
    if($_POST){

        $op=$_POST['number'];
 

        switch ($op) {
            case '1':
                echo("<p align= 'center'><img src='images/mes 1.jpg' /></p>");
            break;
 
            case '2':
             
                echo("<p align= 'center'><img src='images/mes 2.jpg' /></p>");
            break;
 
            case '3':
             
                echo("<p align= 'center'><img src='images/mes 3.png' /></p>");
            break;

            case '4':
               
                echo("<p align= 'center'><img src='images/mes 4.png' /></p>");
            break;

            case '5':
               
                echo("<p align= 'center'><img src='images/mes 5.png' /></p>");
            break;

            case '6':
               
                echo("<p align= 'center'><img src='images/mes 6.png' /></p>");
            break;

            case '7':
               
                echo("<p align= 'center'><img src='images/mes 7.png' /></p>");
            break;

            case '8':
               
                echo("<p align= 'center'><img src='images/mes 8.png' /></p>");
            break;

            case '9':
               
                echo("<p align= 'center'><img src='images/mes 9.jpg' /></p>");
            break;

            case '10':
               
                echo("<p align= 'center'><img src='images/mes 10.jpg' /></p>");
            break;

            case '11':
               
                echo("<p align= 'center'><img src='images/mes 11.jpg' /></p>");
            break;

            case '12':
               
                echo("<p align= 'center'><img src='images/mes 12.jpg' /></p>");
            break;
 
            default:
            echo("<center> ERRO...  MÊS $op NÃO EXISTE</center>");
                break;
        }
    }
?>

</body>