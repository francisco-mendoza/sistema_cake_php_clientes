<?php

class EstadoContacto extends AppModel
{
	public $displayField = 'nombre'; // nombre que mostrará

	public $hasMany = array(
			'Contacto' => array(
					'className' => 'Contacto',
					'foreignKey'=> 'idEstado',
					'dependent' => true,
				)
		);
}

