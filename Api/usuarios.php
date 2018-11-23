<?php

	///normalmente utiliza-se o foreach  para listar algumas informações, trazer uma lista do banco de dados, imprimir essa linstagem na tela para o usuario, criaar uma tabela etc.
	function getUsuarios(){
		//vou criar manualmente aqui, mas estes dados poderiam vir de um banco de dados ou webservice
		$dados = [
			["nome"=> "Carlos","email"=>"carlos@mail.com"],
			["nome"=> "Maria","email"=>"maria@mail.com"],
			["nome"=> "Pedro","email"=>"pedro@mail.com"],
			["nome"=> "Mateus","email"=>"mateus@mail.com"]
		];
		return $dados;
	}

function exibeUsuario(){
		$usuarios = getUsuarios();
		$html = "";
		foreach ($usuarios as $chave=> $usuario) {
			$nome = $usuario["nome"];
			$email = $usuario["email"];
			$html .= "<li>Nome: $nome - E-mail: $email</li>";

		}
		// aqui o return foi substituido pelo comando de impressão echo  para exibir os dados desta variavel
		echo $html;
	}
