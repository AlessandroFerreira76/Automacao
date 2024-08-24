<?php


// dados de login e senha do Banco Dados
require_once 'conexao.php';

// conexão e seleção do banco de dados
$con = mysqlI_connect($host, $user, $pass, $db);    

// executa a consulta
$sql = "SELECT * FROM AUTOMACAO WHERE ID = '1'";
    
//Executa uma consulta no banco de dados
$res = mysqli_query($con, $sql);

// Fatia os Dados num array
$f = mysqli_fetch_array($res);

$byte_0 = $f['byte_0'];

//echo($byte_0);

$dec = (decbin($byte_0));

$dec = str_pad($dec, 8, "0", STR_PAD_LEFT); 
/** */
echo $dec; 

/**$x = 8 - (strlen($dec));
for($x; $x > 0; $x-- ){
    echo(0);
} */

//echo(decbin($byte_0)); // Converte para BINARIO e imprime
   
?>