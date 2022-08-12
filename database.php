<?php
//Create connection
$db_host = 'sql5.freemysqlhosting.net';
$db_name = 'sql5512090';
$db_user = 'sql5512090';
$db_password = 'InIhHymRtm';

//Create mysqli object
$mysqli = new mysqli($db_host, $db_user, $db_password, $db_name);

//Error handler
if($mysqli->connect_error){
    printf("Connect fail: %s\n", $mysqli->connect_error);
    exit();
}