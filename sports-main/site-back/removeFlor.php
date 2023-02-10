<html>
	<?php
	include('connection.php');
	?>  

	<body>

	<?php

	$querybuque = 'DELETE FROM produto WHERE categoria_id = '.$_GET['id'];
	$resultbuque = mysqli_query($db, $queryproduto) or die(mysqli_error($db));

	$query = 'DELETE FROM categoria WHERE id = '.$_GET['id'];
	$result = mysqli_query($db, $query) or die(mysqli_error($db));
	
						
	?>
		
	<script type="text/javascript">
		alert("Removido com sucesso!");
		window.location = "http://sports.com.br/indexCategoria.php";
	</script>				
				
	</body>
</html>
