<?php
	include('connection.php');

?>  
<body>

	<header>
	    <section>
	       	<h2> Sports </h2>
	    </section>
    </header>

	<h1>
		Editar Produto
	</h1>

	<?php 
	$query = 'SELECT * FROM produto WHERE id ='.$_GET['id'];
	$result = mysqli_query($db, $query) or die(mysqli_error($db));

	while($row = mysqli_fetch_array($result)) {

		$id=$row['id'];
		$nome=$row['nome'];
		$preco=$row['preco'];
		$categoria_id=$row['categoria_id'];
	}
              
	?>
	<form method="post" action="edit_postProduto.php">
	    <input type="hidden" name="id" value="<?php echo $id; ?>" />
	    Nome:</br>
		<input placeholder="Nome" name="nome" value="<?php echo $nome; ?>"><br/><br/>
		Preço:</br>
		<input placeholder="Preço" name="preco" value="<?php echo $preco; ?>"><br/><br/>
		Categoria:</br>
		<?php
		
		$query1="SELECT nome,id FROM categoria ORDER BY nome";

		echo "<select name=categoria_id value=''>Categoria</option>";

		foreach ($db->query($query1) as $row){
			echo "<option value=$row[id]>$row[nome]</option>";
		}

		echo "</select>";
		?>
		</br>
		<button type="submit" >Atualizar produto</button>
		<a class="button" href="http://sports.com.br/indexProduto.php">Retornar à listagem de produtos</a>

	</form>  
</body>

</html>
