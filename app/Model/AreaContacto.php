<?php

class AreaContacto extends AppModel
{
	public $displayField = 'nombre'; // nombre que mostrará

	public $hasMany = array(
			'Contacto' => array(
					'className' => 'Contacto',
					'foreignKey'=> 'idContacto',
					'dependent' => true,
				)
		);
}

