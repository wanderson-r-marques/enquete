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
 alert("Selecione uma das op��es!");
 return false;
 }
 }
</script>


<?php

/*
 * Wanderson Rodrigues Marques
 * Web Developer
 * https://github.com/wanderson-r-marques
 */

include "db.ini";
include "db_connect.php";

$R1 = null;
if (isset($_POST['Enviar'])) {
    $R1 = $_POST['R1'];
    $resultado = $_GET['resultado'];
}

if (!isset($_COOKIE['cookies'])) {
    echo "<form name=\"enquete\" method=\"POST\" action=\"enquete.php\" onSubmit=\"return validaForm();\">";
    echo utf8_encode("$pergunta <br><br>");
    echo "<input type=\"radio\" value=\"1\" name=\"R1\">";
    echo utf8_encode(" $opcao1 <br>");
    echo "<input type=\"radio\" value=\"2\" name=\"R1\">";
    echo utf8_encode(" $opcao2 <br>");
    echo "<input type=\"radio\" value=\"3\" name=\"R1\">";
    echo utf8_encode(" $opcao3 <br>");
    echo "<input type=\"radio\" value=\"4\" name=\"R1\">";
    echo utf8_encode(" $opcao4 <br>");
    echo "<br><input type=\"submit\" value=\"Enviar\" name=\"Enviar\">";
    echo "</form>";

    if ($R1 == 1) {
        $query = mysqli_query($db,"SELECT * FROM `$bd` WHERE `Opcao` LIKE '$opcao1'");
        while ($row = mysqli_fetch_array($query)) {
            $voto = $row['Votos'];
        }
        $query = mysqli_query($db,"UPDATE `$bd` SET `Votos` = '$voto' + 1 WHERE `Opcao` LIKE '$opcao1'");
        setcookie('cookies', $_SERVER['REMOTE_ADDR'], time() + 86400);
        echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0\">";
    }

    if ($R1 == 2) {
        $query = mysqli_query($db,"SELECT * FROM `$bd` WHERE `Opcao` LIKE '$opcao2'");
        while ($row = mysqli_fetch_array($query)) {
            $voto = $row['Votos'];
        }
        $query = mysqli_query($db,"UPDATE `$bd` SET `Votos` = '$voto' + 1 WHERE `Opcao` LIKE '$opcao2'");
        setcookie('cookies', $_SERVER['REMOTE_ADDR'], time() + 86400);
        echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0\">";
    }

    if ($R1 == 3) {
        $query = mysqli_query($db,"SELECT * FROM `$bd` WHERE `Opcao` LIKE '$opcao3'");
        while ($row = mysqli_fetch_array($query)) {
            $voto = $row['Votos'];
        }
        $query = mysqli_query($db,"UPDATE `$bd` SET `Votos` = '$voto' + 1 WHERE `Opcao` LIKE '$opcao3'");
        setcookie('cookies', $_SERVER['REMOTE_ADDR'], time() + 86400);
        echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0\">";
    }

    if ($R1 == 4) {
        $query = mysqli_query($db,"SELECT * FROM `$bd` WHERE `Opcao` LIKE '$opcao4'");
        while ($row = mysqli_fetch_array($query)) {
            $voto = $row['Votos'];
        }
        $query = mysqli_query($db,"UPDATE `$bd` SET `Votos` = '$voto' + 1 WHERE `Opcao` LIKE '$opcao4'");
        setcookie('cookies', $_SERVER['REMOTE_ADDR'], time() + 86400);
        echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0\">";
    }

} else {
    echo utf8_encode("$pergunta");
    echo "<br><br>Voto confirmado!";
}

?>


</body>
</html>