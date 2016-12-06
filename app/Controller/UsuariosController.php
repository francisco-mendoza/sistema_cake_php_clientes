<?php

class UsuariosController extends AppController
{
	public $helpers = array('Html','Form');
	public $components = array('Session');

	public function index()
	{
		$params = array('order'=>'nombreUsuario desc');
		$this->set('usuarios',$this->Usuario->find('all',$params));
		//$this->set('usuarios',$this->Usuario->findById(2)); //Buscar por id
	}

	public function agregar()
	{
		if($this->request->is('post')):
			if ($this->Usuario->save($this->request->data)):
				$this->Session->setFlash('Usuario Agregado'); //mensaje cuando agrega
				$this->redirect(array('action'=>'index')); //redirecciona al index despues 
			endif;
		endif;	
	}

	public function edit($id = null)
	{
		//$asd = $this->Usuario->findById($idUsuario);
		$this->Usuario->id = $id;
		if($this->request->is('get')):
			$this->request->data = $this->Usuario->read();
			//$this->request->data = $asd;
		else: //petición no es get
			//print_r($this->request->data);
			//exit;
			if($this->Usuario->save($this->request->data)):
				$this->Session->setFlash('Usuario '.
										$this->request->data['Usuario']['nombreUsuario'].' Guardado');
				$this->redirect( array('action'=>'index'));
			else:
				$this->Session->setFlash('No se pudo guardar');	
			endif;
		endif;

	}

	public function delete($id)
	{
		if($this->request->is('get')):
			throw new MethodNotAllowedException();
		else:
			if($this->Usuario->delete($id)):
				$this->Session->setFlash('Usuario Eliminado');
				$this->redirect(array('action'=>'index'));
			endif;
		endif;
	}

	
}