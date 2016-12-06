<div class="index">
	<h2>Ministerios</h2>
	<table>
		<tr>
			<th><?php echo $this->Paginator->sort('id') ?></th>
			<th><?php echo $this->Paginator->sort('nombre', 'Nombre') ?></th>
			<th><?php echo $this->Paginator->sort('descripcion', 'Descripción') ?></th>
		</tr>
		<?php foreach ($ministerios as $k => $ministerio): ?>
			<tr>
				<td><?php echo h($ministerio['Ministerio']['id']) ?></td>
				<td>
					<?php //genera link para ver detalle
					echo $this->Html->link($ministerio['Ministerio']['nombre'],
						array('controller'=>'ministerios','action'=>'ver',
							$ministerio['Ministerio']['id'])); 
					?>
				</td>
				<td><?php echo h($ministerio['Ministerio']['descripcion']) ?></td>
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