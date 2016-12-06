<?php
//Tabla usuarios (plural y en minusculas)
//Clase Usuario ( singular y en camelCase)


class Usuario extends AppModel
{
	public $validate  = array(
		'nombreUsuario'=>array('rule' =>'notEmpty',
							   'message' =>'El Nombre no puede ser vacio')
		,'apellidoUsuario'=>array('rule'=>'notEmpty',
								  'message' =>'El Apellido no puede ser vacio')
		,'username'=>array('rule'=>'notEmpty',
								  'message' =>'Ingresa un nombre de usuario')
		,'password'=>array('rule'=>'notEmpty',
								  'message' =>'Ingresa una Pass')
		);//validar campos 
}