<?php
/*

check on the admin ...
*/

$sname= "localhost";

$unmae= "root";

$password = "";

$db_name = "psa";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {

    echo "Connection failed!";
}
