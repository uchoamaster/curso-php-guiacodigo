<?php 
include('configuracao.php');
include('db.php');
include('usuarios.php');
include('produtos.php');



function getPagina(){
	$url = $_SERVER['REQUEST_URI'];

//tratamento de url 
	$url = explode("?",$url); // nesse momento ele vira um array
	$url = $url[0]; // agora consigo tratar o elemento busca



	$metodo = $_SERVER['REQUEST_METHOD'];


	if ($metodo == "GET") {
		
		switch($url){
			case "/":
			$produtos = getProdutos();
				include("Paginas/home.php");
				break;
			case "/home":
			$produtos = getProdutos();
				include("Paginas/home.php");
				break;
			case "/sobre":
				include("Paginas/sobre.php");
				break;
			case "/contato":
				include("Paginas/contato.php");
				break;
				case "/busca":
				
			$produtos = buscaProdutos($_GET['busca']);
				include("Paginas/home.php");
				
				break;
			default:
			$produtos = getProdutos();
				include("Paginas/home.php");
				break;
		}
	}
		if ($metodo == "POST") {
			switch($url){
			case "/produto/adicionar":
				if(adicionarProdutos($_POST)){
					var_dump("OK");exit;
				}
			break;
		   default:
			$produtos = getProdutos();
				include("Paginas/home.php");
				break;
		}
	}
}
	
	//função para debugar as atualizações
	
	//return include ("Paginas/home.php");

