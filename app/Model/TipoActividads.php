<?php

class TipoActividad extends AppModel
{
	public $displayField = 'nombre'; // nombre que mostrará

	public $hasMany = array(
			'Actividad' => array(
					'className' => 'Actividad',
					'foreignKey'=> 'idTipoActividad',
					'dependent' => true,
				)
		);
}
