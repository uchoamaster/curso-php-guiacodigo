 <p><?php echo getInfo("descricao") ?></p>
 <hr>
<h2>Pesquisar</h2>
<form action="busca" method="GET" accept-charset="utf-8">
	<input type="text" name="busca" placeholder="Busca">
	<button>Pesquisar</button>	
</form>

<h2>Lista de Produtos</h2>
<ul>
<!-- operadores básicos do php -->
	<?php foreach($produtos as $produto): ?>
<!-- com esse comando eu consigo trazer cada produto direto da api.php onde declarei ele na mesma -->
		<!-- <li><?php echo $produto['titulo']  ?><br></li> -->
		<!-- number format -->
		<!-- posso estipular o valor da quantidade de virgula por casas decimais -->
		<!-- aqui teremos o titulo , a descrição e  valor de cada produto formatados -->
		<li><?php echo $produto['titulo']." - ".$produto['descricao'] ." - "."R$".number_format($produto['valor'],2,",",".")  ?><br></li>

		<!-- aqui eu posso  somar cada valor do produto  -->
		<!-- <li><?php echo $produto['valor'] + 1000.00  ?><br></li> -->
		<!-- se fir diminuir basta por o sinal de subtraco -->
		<!-- <li><?php echo $produto['valor'] - 1000.00  ?><br></li> -->
		<!-- posso multiplicar tb o produto -->
		<!-- <li><?php echo $produto['valor'] * 2  ?><br></li> -->
		<!-- posso dividir tb -->
		<!-- <li><?php echo $produto['valor'] / 2  ?><br></li> -->
		<!-- elevar a potencia com 2 valores -->
		<!-- <li><?php echo $produto['valor'] ** 2  ?><br></li> -->
		<!-- raiz quadradade cada valor de cada produto -->
		<!-- <li><?php echo sqrt($produto['valor'])  ?><br></li> -->

<?php endforeach; ?>

</ul>

<hr>

<h2>Adicionar Produto</h2>

<form action="/produto/adicionar" method="POST" accept-charset="utf-8">
	<input type="text" name="titulo" placeholder="Título">
	<input type="text" name="descricao" placeholder="Descrição">
	<input type="text" name="valor" placeholder="Valor R$">
	<button type="">Adicionar</button>

</form>




	<!--  <ul>
	 	aqui a função foi chamada sem o echo, pois acima no return foi colocado o echo para melhorar o comando em si
	 	<?php  exibeUsuario() ?>
	 </ul> -->