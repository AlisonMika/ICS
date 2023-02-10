<?php      
       include('connection.php');      
?>  
<body>
	<header>
	       <section>
	       	<h2> Sports </h2>
	       </section>
    	</header>
	
	<h1>Adicionar Categoria</h1>
	<form method="post" action="add_postCategoria.php">
              Nome:</br>
		<input placeholder="Nome da Categoria" name="nome"><br/><br/>
		<button type="submit" class="button">Salvar nova categoria</button>&nbsp;
		<button type="reset" class="button">Limpar campos</button>&nbsp;
		<a class="button" href="http://sports.com.br/indexCategoria.php">Retornar à listagem de categorias</a>
	</form>  
</body>

</html>
