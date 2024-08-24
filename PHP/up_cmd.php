<?php


// dados de login e senha do Banco Dados
require_once 'conexao.php';

// Dados recebidos metodo POST
$tabela = 'AUTOMACAO';
$bit_1 = $_GET['b1'];		// Dados 1
$bit_2 = $_GET['b2'];		// Dados 2
$bit_3 = $_GET['b3'];		// Dados 3
$bit_4 = $_GET['b4'];		// Dados 4
$bit_5 = $_GET['b5'];		// Dados 5
$bit_6 = $_GET['b6'];		// Dados 6
$bit_7 = $_GET['b7'];		// Dados 7
$bit_8 = $_GET['b8'];		// Dados 8

$byte = (($bit_1 * 2) ** 7) + 
        (($bit_2 * 2) ** 6) + 
        (($bit_3 * 2) ** 5) + 
        (($bit_4 * 2) ** 4) + 
        (($bit_5 * 2) ** 3) + 
        (($bit_6 * 2) ** 2) + 
        (($bit_7 * 2) ** 1);
        if($bit_8 == 1) $byte ++;
echo ($byte);
echo("<br>");


// conexão e seleção do banco de dados
$con = mysqlI_connect($host, $user, $pass, $db);    

// executa a consulta
if($results = "UPDATE $tabela SET byte_0 = '$byte', byte_1= '$byte_1', byte_2= '$byte_2', byte_3 = '$byte_3' WHERE id='1'"){
    echo"primeira parte passou<p>";
}
if($resultado_configs = mysqli_query($con, $results)){
    echo"segunda parte passou<p>";
}
    
/**$byte_0 = $byte_0 == 1 ? 1 : 0;
$byte_1 = $byte_1 == 1 ? 2 : 0;
$byte_2 = $byte_2 == 1 ? 4 : 0;
$byte_3 = $byte_3 == 1 ? 8 : 0;

$dado_1 = ($byte_0 + $byte_1  + $byte_2  + $byte_3 );
$dado_1 = (int)$dado_1;

echo($dado_1); */

// // Fatia os Dados num array
// $f = mysqli_fetch_array($res);

// $byte_2 = $f['byte_2'];

// echo(decbin($byte_2)); // Converte para BINARIO e imprime
 // fecha a conexão
 mysqli_close($con);
   
?>
<meta http-equiv="refresh" content="2; URL='form2.php'"/> <!-Define o redirecionamento, tempo e URL->