<?php 
function getProdutos(){
	/*$dados = array(

		["titulo"=>"PHP Básico","descricao"=>"Curso de PHP Básico","valor"=>"120.90"],
		["titulo"=>"PHP com PDO","descricao"=>"Curso de com PDO","valor"=>"140.90"],
		["titulo"=>"PHP OO","descricao"=>"Curso de PHP Orientado a Objetos","valor"=>"150.90"]

	);*/

	$conexao = getConexao();
	$select = "select * from produtos";
	$ret = $conexao->query($select);
	$produtos = $ret->fetchAll();
	
	return $produtos;
}

function buscaProdutos($busca){

	$produtos = getProdutos();

	$resultados = [];
	foreach ($produtos as $produto) {
			
			//$existe = in_array($busca, $produto);
			$existe = in_array(strtolower($busca),array_map('strtolower', $produto));
			if ($existe) {
				array_push($resultados, $produto);
			}

	}	
	return $resultados;
}

function adicionarProdutos($dados){
	$conexao = getConexao();
//inserindo dados no banco de dados com pdo
	$insert = "INSERT INTO produtos (titulo,descricao,valor) VALUES (:titulo,:descricao,:valor)";
//preparando a conexão com o banco de dados
$stmt = $conexao->prepare($insert);
$stmt->bindValue(':titulo',$dados['titulo']);
$stmt->bindValue(':descricao',$dados['descricao']);
$stmt->bindValue(':valor',$dados['valor']);
$stmt->execute();
return $conexao->lastInsertId();
}



