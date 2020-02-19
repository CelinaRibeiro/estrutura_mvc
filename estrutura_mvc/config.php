<?php
require 'environment.php';

$config = array();
if(ENVIRONMENT == 'development') {
    define("BASE_URL", "http://localhost/workspace/estrutura_mvc/");
    $config['dbname'] = 'estrutura_mvc';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
}else{
    //dados do servidor de hospedagem
    define("BASE_URL", "http://meusite.com.br/");
    $config['dbname'] = 'estrutura_mvc';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
}

global $db;
try {
    $db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);    
} catch (PDOException $e) {
    echo "ERRO: ".$e->getMessage();
    exit;
}
?>