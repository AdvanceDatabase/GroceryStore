<?php
require 'vendor/autoload.php';
    try{
    $m = new MongoDB\Client();
     
    $db = $m->groceries;
    //echo "Databse loginreg selected";
    $collection = $db->store;
    //echo "Collection userdata Selected Successfully";
    }
    catch (Exception $e){
        die("Error. Couldn't connect to the server. Please Check");
    }
       session_start();
?>