<?php
       include('connection.php');
?>
<body>
	<header>
	       <section>
	       	<h2> Sports </h2>
	       </section>
    	</header>
	
	<h1>Categorias Disponiveis</h1>
	<br/>

	<div class="Post">
		<a class="button" href="indexProduto.php"> Listagem de Produtos</a>
		<a class="button" href="http://sports.backend.biz/addCategoria.php">Adicionar nova categoria</a>
	</div>
	
	<br/><br/>
	<table> 
		<thead>
			<tr>
				<th>Nome da Categoria</th>
				<th>Operações</th>
			</tr>
		</thead>
		<tbody>
			<?php                  
			$query = 'SELECT * FROM categoria';
			$result = mysqli_query($db, $query) or die (mysqli_error($db));

			while ($row = mysqli_fetch_assoc($result)) {
                                
				echo '<tr>';
					echo '<td>'. $row['nome'].'</td>';
					echo '<td>';
						echo '<div class="Post">';
							echo '<a class="button" href="detailsCategoria.php?id='.$row['id'].'" >Detalhes</a>';
							echo '<a class="button" href="http://sports.backend.biz/editCategoria.php?id='.$row['id'].'">Editar</a>';
							echo '<a class="button" href="http://sports.backend.biz/removeCategoria.php?id='.$row['id'].'">Remover</a>';
						echo '</div>';
					echo '</td>';
				echo '</tr> ';

			}
			?> 
                                    
		</tbody>
	</table>

</body>

</html>
