<html>
<head>
<title>Enquete</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">


<script type="text/javascript">
 function validaForm(){
 var controle = 0;
 for (i=0;i<document.enquete.elements.length;i++){
 if (document.enquete.elements[i].type == "radio"){
 if (document.enquete.elements[i].checked == true){
 controle++;
 }
 }
 }
 if (controle <= 0){
 alert("Selecione uma das opções!");
 return false;
 }
 }
</script> 


<?php

/*

  =====================================================================
    Script desenvolvido por Alan Pardini Sant'Ana - www.alanps.com.br
  =====================================================================

*/

include "db.ini";
include "db_connect.php";

$R1=$_POST['R1'];
$resultado=$_GET['resultado'];

if (!isset($_COOKIE['cookies']))
{
echo "<form name=\"enquete\" method=\"POST\" action=\"enquete.php\" onSubmit=\"return validaForm();\">";
echo "$pergunta <br><br>";
echo "<input type=\"radio\" value=\"1\" name=\"R1\">"; 
echo " $opcao1 <br>";
echo "<input type=\"radio\" value=\"2\" name=\"R1\">";
echo " $opcao2 <br>";
echo "<input type=\"radio\" value=\"3\" name=\"R1\">";
echo " $opcao3 <br>";
echo "<input type=\"radio\" value=\"4\" name=\"R1\">";
echo " $opcao4 <br>";
echo "<br><input type=\"submit\" value=\"Enviar\" name=\"Enviar\">";
echo "</form>";

if ($R1 == 1)
{
$query = mysql_query("SELECT * FROM `$bd` WHERE `Opção` LIKE '$opcao1'") or die(mysql_error());
while ($row = mysql_fetch_array($query)) {
$voto=$row[Votos];
}
$query = mysql_query("UPDATE `$bd` SET `Votos` = '$voto' + 1 WHERE `Opção` LIKE '$opcao1'") or die(mysql_error());
setcookie('cookies',$_SERVER['REMOTE_ADDR'],time()+86400);
echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0\">";
}

if ($R1 == 2)
{
$query = mysql_query("SELECT * FROM `$bd` WHERE `Opção` LIKE '$opcao2'") or die(mysql_error());
while ($row = mysql_fetch_array($query)) {
$voto=$row[Votos];
}
$query = mysql_query("UPDATE `$bd` SET `Votos` = '$voto' + 1 WHERE `Opção` LIKE '$opcao2'") or die(mysql_error());
setcookie('cookies',$_SERVER['REMOTE_ADDR'],time()+86400);
echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0\">";
}

if ($R1 == 3)
{
$query = mysql_query("SELECT * FROM `$bd` WHERE `Opção` LIKE '$opcao3'") or die(mysql_error());
while ($row = mysql_fetch_array($query)) {
$voto=$row[Votos];
}
$query = mysql_query("UPDATE `$bd` SET `Votos` = '$voto' + 1 WHERE `Opção` LIKE '$opcao3'") or die(mysql_error());
setcookie('cookies',$_SERVER['REMOTE_ADDR'],time()+86400);
echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0\">";
}

if ($R1 == 4)
{
$query = mysql_query("SELECT * FROM `$bd` WHERE `Opção` LIKE '$opcao4'") or die(mysql_error());
while ($row = mysql_fetch_array($query)) {
$voto=$row[Votos];
}
$query = mysql_query("UPDATE `$bd` SET `Votos` = '$voto' + 1 WHERE `Opção` LIKE '$opcao4'") or die(mysql_error());
setcookie('cookies',$_SERVER['REMOTE_ADDR'],time()+86400);
echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0\">";
}

}

else
{
echo "$pergunta";
echo "<br><br>Voto confirmado!";
}

?>


</body>
</html>