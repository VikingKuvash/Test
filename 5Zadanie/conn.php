<?php

$user = "root";
$password = "root";

try  {
    $db = new PDO ("mysql:host=localhost;dbname=dump", $user, $password);
} catch (Exception $e){
    echo $e->getMessage ();
}
?>