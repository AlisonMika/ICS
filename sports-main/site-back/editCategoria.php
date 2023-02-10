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
		Editar Categoria
	</h1>

	<?php 
	$query = 'SELECT * FROM categoria WHERE id ='.$_GET['id'];
	$result = mysqli_query($db, $query) or die(mysqli_error($db));

	while($row = mysqli_fetch_array($result)) {

		$id= $row['id'];
		$nome= $row['nome'];

	}
              
	?>
	<form method="post" action="edit_postCategoria.php">

	    <input type="hidden" name="id" value="<?php echo $id; ?>" />
	    Nome:</br>
		<input placeholder="Nome" name="nome" value="<?php echo $nome; ?>"><br/><br/>
		<button type="submit" >Atualizar categoria</button>
		<a class="button" href="http://sports.com.br/indexCategoria.php">Retornar à listagem de categorias</a>

	</form>  
</body>

</html>
