<div class="index">
	<h2>Tipo De Clientes</h2>
	<table>
		<tr>
			<th><?php echo $this->Paginator->sort('id') ?></th>
			<th><?php echo $this->Paginator->sort('nombre', 'Nombre') ?></th>
			<th><?php echo $this->Paginator->sort('descripcion', 'Descripcion') ?></th>
		</tr>
		<?php foreach ($tipoClientes as $k => $tipoCliente): ?>
			<tr>
				<td><?php echo h($tipoCliente['TipoCliente']['id']) ?></td>
				<td><?php echo h($tipoCliente['TipoCliente']['nombre']) ?></td>
				<td><?php echo h($tipoCliente['TipoCliente']['descripcion']) ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
	<p>
		<?php echo $this->Paginator->counter(
			array('format'=>'Página {:page} de {:pages} mostrando {:current} registros de {:count}' )
		); ?>
	</p>
	<div class="paging">
		<?php echo $this->Paginator->prev('anterior', array(),null, array('class'=>'prev disabled')); ?>
		<?php echo $this->Paginator->numbers(array('separator'=>'')); ?>
		<?php echo $this->Paginator->next('siguiente', array(),null, array('class'=>'next disabled')); ?>

	</div>
</div>