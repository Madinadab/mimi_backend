<?php 
try{
    $bdd->new PDO('mysql:host=127.0.0.1;dbname=p04','root','');
    $bdd->exec('SET CHARACTER SET utf8');
}
catch(Exception $e){
    die('erreur:' .$e->getMessage());
}