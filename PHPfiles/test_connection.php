<?php

$dbhost = 'yourInfo';
$dbuser = 'yourInfo';
$dbpass = 'yourInfo';
$database = 'yourInfo';

$mysqli = new mysqli($dbhost,$dbuser,$dbpass,$database);

if ($mysqli->connect_errno){
    echo "We're sorry.  There was a failure";
    echo "Error: mySQL connection failed";
    echo "Errno: ".$mysqli->connect_errno."\n";
    echo "Error: ".$mysqli->connect_error."\n";
exit;

}

echo {MySQL Connection Succeeded";
$mysqli->close();
 }
