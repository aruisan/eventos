<br>
<table class="table">
	<thead>
		<th>SUSCRIPCIONES</th>
		<th>ESTADO</th>	
	</thead>
	<tbody>
		<?php while($datos =  $consulta->fetch_object()){?>
		<tr>
			<td><?= $datos->titulo; ?></td>
			<td>Registrado</td>
		</tr>
		<?php }?>
	</tbody>
	
</table>