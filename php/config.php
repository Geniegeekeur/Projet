<?php
try //On essaye
{
    $bdd = new PDO('mysql:host=127.0.0.1;dbname=qbzgntwe_smnac;charset=utf8;port=3306', 'qbzgntwe_smnac', 'HDM8gjfj$$'); 
}catch (Exception $e) 
{
    die('Erreur'.$e->getMessage()); 
}
