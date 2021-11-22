<?php 
include "config.php";
include "constants.php";
include "./vendor/autoload.php";
include "./libs/helpers.php";
try {
    $db = new PDO("mysql:host=$db_config->host;dbname=$db_config->db_name;charset=utf8mb4",$db_config->user,$db_config->pass) ;
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    diePage("PDO failed to connect : Error : $e->getMessage() " . "on line : " . $e->getLine());
};
// echo "connection is okay";

include "./libs/lib-auth.php";
include "./libs/lib-tasks.php";
