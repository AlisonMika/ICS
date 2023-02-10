<?php
       include('connection.php');
?>
<body>

	<header>
	       <section>
	       	<h2> Sports </h2>
	       </section>
    	</header>
	
	<h1>Produtos a venda</h1>
	
	<br/>
	<div class="Post">
		<a class="button" href="indexCategoria.php"> Listagem das categorias</a>
		<a class="button" href="http://sports.backend.biz/addProduto.php">Adicionar novo produto</a>
	</div>
	<br/><br/>
	<table> 
		<thead>
			<tr>
				<th>Nome do Produto</th>
				<th>Preço do Produto (R$)</th>
				<th>Categoria</th>
				<th>Operações</th>
			</tr>
		</thead>
		<tbody>
			<?php                  
			$query = 'SELECT * FROM produto';
			$result = mysqli_query($db, $query) or die (mysqli_error($db));

			while ($row = mysqli_fetch_assoc($result)) {   
				echo '<tr>';

					$id = $row['categoria_id'];

					$resultcategoria = mysqli_query($db,"SELECT nome FROM categoria WHERE id = '$id'");
					$rowcategoria = mysqli_fetch_assoc($resultcategoria);

					echo '<td>'. $row['nome'].'</td>';
					echo '<td>'. $row['preco'].'</td>';
					echo '<td>'. $rowcategoria['nome'].'</td>';
					echo '<td>';
						echo '<div class="Post">';
							echo '<a class="button" href="detailsProduto.php?id='.$row['id'].'" >Detalhes</a>';
							echo '<a class="button" href="http://sports.backend.biz/editProduto.php?id='.$row['id'].'">Editar</a>';
							echo '<a class="button" href="http://sports.backend.biz/removeProduto.php?id='.$row['id'].'">Remover</a>';
						echo '</div>';
					echo '</td>';
				echo '</tr> ';

			}
			?> 
                                    
		</tbody>
	</table>

</body>

</html>
