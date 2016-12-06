<?php

class TipoClientesController extends AppController
{
	public $paginate = array(
			'limit' => 4,
			'order' => array('TipoCliente.id' => 'asc')
		);

	public function index()
	{
		$this->TipoCliente->recursive = 0;
		$this->set('tipoClientes',$this->paginate());
	}

	public function agregar()
	{
		if($this->request->is('post')):
			if($this->TipoCliente->save($this->request->data)):
				$this->Session->setFlash('El nuevo Tipo de Clientes ha sido agregado');
				$this->redirect(array('action'=>'index'));
			endif;
		endif;
	}
}

?>