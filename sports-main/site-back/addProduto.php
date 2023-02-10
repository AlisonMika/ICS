<?php
       
       include('connection.php');
       
?>  
<body>
	<header>
	       <section>
	       	<h2> Sports </h2>
	       </section>
    	</header>
	
	<h1>Adicionar Produto</h1>
	<form method="post" action="add_postProduto.php">
		Nome do produto:</br>
		<input placeholder="Nome do produto" name="nome"><br/><br/>
		Preço:</br>
		<input placeholder="Preço" name="preco"><br/><br/>
		Categoria do produto:</br>
		<?php
		
		$query="SELECT nome,id FROM categoria ORDER BY nome"; 

		echo "<select name=categoria_id value=''>Categoria</option>";

		foreach ($db->query($query) as $row){
			echo "<option value=$row[id]>$row[nome]</option>";
		}

		echo "</select>";
		?>	
		<br/>
		<button type="submit" class="btn btn-success">Salvar novo produto</button>&nbsp;
		<button type="reset" class="btn btn-warning">Limpar dados</button>&nbsp;
		<a class="button" href="http://sports.com.br/indexProduto.php">Retornar à listagem de produtos</a>

	</form>  
</body>

</html>
