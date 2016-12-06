<?php

class MinisteriosController extends AppController
{
	public $paginate = array(
			'limit' => 1,
			'order' => array('Ministerio.id' => 'asc')
		);

	public function index()
	{
		$this->Ministerio->recursive = 0;
		$this->set('ministerios',$this->paginate());
	}

	public function agregar()
	{
		if($this->request->is('post')):
			if($this->Ministerio->save($this->request->data)):
				$this->Session->setFlash('El nuevo Ministerio ha sido agregado');
				$this->redirect(array('action'=>'index'));
			endif;
		endif;
	}

	public function ver($id = null)
	{
		$this->Ministerio->id = $id;
		$this->set('ministerio',$this->Ministerio->read(null, $id));
	}

	public function eliminar($id)
	{

	}
}

?>