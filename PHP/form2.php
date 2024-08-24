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

$dec = (decbin($byte_0));
/** */
$dec = str_pad($dec, 8, "0", STR_PAD_LEFT); 
/** */
echo("<center>");
echo $dec; 
echo("</center>");
echo("<br>"); 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <!-- meta tag responsiva -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
  <title>AUTOMAC-AF</title> 
</head> 
<body> 

  <form name="mylogin" action="up_cmd.php" method="get"
        id="mylogin"> 
        
        <table align="center" border="2" cellpadding="4" cellspacing="4"> 
      <tr align="center" valign="top"> 
        <td> 
          <p align="center"><font size="5">CONTROLE ACIONAMENTOS
             </font></p> 
          <table align="center" border="2"> 
 
           
 
            <tr> 
              <td colspan="5" align="center" height="35" width="255" valign="top"> Selecione
                 
              </td> 
            </tr> 
            
            <tr align="left"> 
              <td>COMANDO: (1) <?php if($dec[0] == 1) echo("ON"); else echo("OFF"); ?></td> 
              <td> 
                 <input name="b1" value="1" type="radio">
                        ON<br> 
                 <input name="b1" value="0" type="radio">
                       OFF<br>                   
              </td> 
            </tr> 
            
            <tr align="left"> 
              <td>COMANDO: (2) <?php if($dec[1] == 1) echo("ON"); else echo("OFF"); ?></td> 
              <td> 
                 <input name="b2" value="1" type="radio">
                        ON<br> 
                 <input name="b2" value="0" type="radio">
                       OFF<br>                   
              </td> 
            </tr> 
            
            <tr align="left"> 
              <td>COMANDO: (3) <?php if($dec[2] == 1) echo("ON"); else echo("OFF"); ?></td> 
              <td> 
                 <input name="b3" value="1" type="radio">
                        ON<br> 
                 <input name="b3" value="0" type="radio">
                       OFF<br>                   
              </td> 
            </tr> 
            
            <tr align="left"> 
              <td>COMANDO: (4) <?php if($dec[3] == 1) echo("ON"); else echo("OFF"); ?></td> 
              <td> 
                 <input name="b4" value="1" type="radio">
                        ON<br> 
                 <input name="b4" value="0" type="radio">
                       OFF<br>                   
              </td> 
              
            </tr> 

            <tr align="left"> 
              <td>COMANDO: (5) <?php if($dec[4] == 1) echo("ON"); else echo("OFF"); ?></td> 
              <td> 
                 <input name="b5" value="1" type="radio">
                        ON<br> 
                 <input name="b5" value="0" type="radio">
                       OFF<br>                   
              </td> 
              
            </tr> 

            <tr align="left"> 
              <td>COMANDO: (6) <?php if($dec[5] == 1) echo("ON"); else echo("OFF"); ?></td> 
              <td> 
                 <input name="b6" value="1" type="radio">
                        ON<br> 
                 <input name="b6" value="0" type="radio">
                       OFF<br>                   
              </td> 
              
            </tr> 

            <tr align="left"> 
              <td>COMANDO: (7) <?php if($dec[6] == 1) echo("ON"); else echo("OFF"); ?></td> 
              <td> 
                 <input name="b7" value="1" type="radio">
                        ON<br> 
                 <input name="b7" value="0" type="radio">
                       OFF<br>                   
              </td> 
              
            </tr> 

            <tr align="left"> 
              <td>COMANDO: (8) <?php if($dec[7] == 1) echo("ON"); else echo("OFF"); ?></td> 
              <td> 
                 <input name="b8" value="1" type="radio">
                        ON<br> 
                 <input name="b8" value="0" type="radio">
                       OFF<br>                   
              </td> 
              
            </tr> 
            
            
          </table> 
        </td> 
      </tr> 
 
      <tr> 
        <td colspan="2" align="center"> 
          <input value="Gravar" type="submit"> 
          <input type="reset"> 
        </td> 
      </tr> 
    </table> 
    
  </form> 
  
</body> 
</html>