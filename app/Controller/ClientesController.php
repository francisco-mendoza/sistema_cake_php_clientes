<?php

/**
 * @property void Cliente
 */
class ClientesController extends AppController
{
	public function index()
	{
		$this->Cliente->recursive = 0;
		$this->set('clientes', $this->paginate());
	}

	public function agregar()
	{
		if($this->request->is('post')):
			if($this->Cliente->save($this->request->data)):
				$this->Session->setFlash(__('El Nuevo Cliente ha sido guardado'),'cuadro-alerta', array('class'=>'alert-success'));
				$this->redirect(array('action'=>'index'));

			endif;
		endif;
		
		$ministerios = $this->Cliente->Ministerio->find('list');
		$this->set('ministerios',$ministerios);

		$regions = $this->Cliente->Region->find('list');
		$this->set('regions',$regions);

		$tipoClientes = $this->Cliente->TipoCliente->find('list');
		$this->set('tipoClientes',$tipoClientes);
	}

	public function ver($id)
	{
		
	}

	public function eliminar($id)
	{
		
	}
}

?>