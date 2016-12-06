
<div>
    <?php
	echo $this->Html->Link('Agregar Nueva Region','#agregar', array('data-toggle' => 'modal','class' => 'btn btn-default'));
	?>

</div>


<br>

<div class="index">
	<div class="widget-header"> <i class="icon-list-alt"></i>
	<h3>Regiones</h3>
	</div>

	<table  class="table table-bordered">
		<tr>
			<th><?php echo $this->Paginator->sort('id') ?></th>
			<th><?php echo $this->Paginator->sort('region_nombre', 'Nombre') ?></th>
			<th><?php echo $this->Paginator->sort('region_ordinal', 'Ordinal') ?></th>
		</tr>
		<?php foreach ($regions as $k => $region): ?>
			<tr>
				<td><?php echo h($region['Region']['id']) ?></td>
				<td><?php echo h($region['Region']['region_nombre']) ?></td>
				<td><?php echo h($region['Region']['region_ordinal']) ?></td>
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




<!--------------------------  MODAL PARA AGREGAR    ---------------------------->
<div class="modal fade" id="agregar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agregar Región</h4>
      </div>
      <div class="modal-body">


	<?php echo $this->Form->create('Region'); ?>
	<fieldset>
		
		<?php 
			
			echo $this->Form->input('region_nombre');
			echo $this->Form->input('region_ordinal');
			
			
		?>
	</fieldset>
	



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" style="float:left">Cancelar</button>
        
        
        <?php 
			$opcion = array('label'=>'Agregar Region','class'=>'btn btn-success','type'=>'button');
			echo $this->Form->end($opcion); 
		?>
		
      </div>
    </div>
  </div>
</div>