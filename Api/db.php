<?php 

function getConexao(){
	//$conexao = new \PDO("mysql:host=localhost;dbname=lista_clientes","root","");
$conexao = new \PDO("mysql:host=localhost;dbname=lista_clientes","root","",array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
	return $conexao;
}

