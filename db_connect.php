<?php 

/*
   * Wanderson Rodrigues Marques
   * Web Developer
   * https://github.com/wanderson-r-marques
*/

///////////////////////////////////////////
// Conectando no servidor MySQL.
///////////////////////////////////////////
include "db.ini";

$db = mysql_connect("$mysqlserver", "$mysqluser", "$mysqlpass") or die("$mysqlerro4");

mysql_select_db("$mysqldbname") or die("$mysqlerro5");

?>