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


$db = mysqli_connect($mysqlserver, $mysqluser, $mysqlpass, $mysqldbname);


?>