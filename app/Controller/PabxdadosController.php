<?php
App::uses('AppController', 'Controller');
/**
 * Pabxdados Controller
 *
 * @property Pabxdado $Pabxdado
 * @property PaginatorComponent $Paginator
 */
class PabxdadosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Pabxdado->recursive = 0;
		$this->set('pabxdados', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Pabxdado->exists($id)) {
			throw new NotFoundException(__('Invalid pabxdado'));
		}
		$options = array('conditions' => array('Pabxdado.' . $this->Pabxdado->primaryKey => $id));
		$this->set('pabxdado', $this->Pabxdado->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Pabxdado->create();
			if ($this->Pabxdado->save($this->request->data)) {
				return $this->flash(__('The pabxdado has been saved.'), array('action' => 'index'));
			}
		}
		$clientes = $this->Pabxdado->Cliente->find('list');
		$pabxconfs = $this->Pabxdado->Pabxconf->find('list');
		$placas = $this->Pabxdado->Placa->find('list');
		$this->set(compact('clientes', 'pabxconfs', 'placas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Pabxdado->exists($id)) {
			throw new NotFoundException(__('Invalid pabxdado'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Pabxdado->save($this->request->data)) {
				return $this->flash(__('The pabxdado has been saved.'), array('action' => 'index'));
			}
		} else {
			$options = array('conditions' => array('Pabxdado.' . $this->Pabxdado->primaryKey => $id));
			$this->request->data = $this->Pabxdado->find('first', $options);
		}
		$clientes = $this->Pabxdado->Cliente->find('list');
		$pabxconfs = $this->Pabxdado->Pabxconf->find('list');
		$placas = $this->Pabxdado->Placa->find('list');
		$this->set(compact('clientes', 'pabxconfs', 'placas'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Pabxdado->id = $id;
		if (!$this->Pabxdado->exists()) {
			throw new NotFoundException(__('Invalid pabxdado'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Pabxdado->delete()) {
			return $this->flash(__('The pabxdado has been deleted.'), array('action' => 'index'));
		} else {
			return $this->flash(__('The pabxdado could not be deleted. Please, try again.'), array('action' => 'index'));
		}
	}

/**
 * admib_index method
 *
 * @return void
 */
	public function admib_index() {
		$this->Pabxdado->recursive = 0;
		$this->set('pabxdados', $this->Paginator->paginate());
	}

/**
 * admib_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admib_view($id = null) {
		if (!$this->Pabxdado->exists($id)) {
			throw new NotFoundException(__('Invalid pabxdado'));
		}
		$options = array('conditions' => array('Pabxdado.' . $this->Pabxdado->primaryKey => $id));
		$this->set('pabxdado', $this->Pabxdado->find('first', $options));
	}

/**
 * admib_add method
 *
 * @return void
 */
	public function admib_add() {
		if ($this->request->is('post')) {
			$this->Pabxdado->create();
			if ($this->Pabxdado->save($this->request->data)) {
				return $this->flash(__('The pabxdado has been saved.'), array('action' => 'index'));
			}
		}
		$clientes = $this->Pabxdado->Cliente->find('list');
		$pabxconfs = $this->Pabxdado->Pabxconf->find('list');
		$placas = $this->Pabxdado->Placa->find('list');
		$this->set(compact('clientes', 'pabxconfs', 'placas'));
	}

/**
 * admib_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admib_edit($id = null) {
		if (!$this->Pabxdado->exists($id)) {
			throw new NotFoundException(__('Invalid pabxdado'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Pabxdado->save($this->request->data)) {
				return $this->flash(__('The pabxdado has been saved.'), array('action' => 'index'));
			}
		} else {
			$options = array('conditions' => array('Pabxdado.' . $this->Pabxdado->primaryKey => $id));
			$this->request->data = $this->Pabxdado->find('first', $options);
		}
		$clientes = $this->Pabxdado->Cliente->find('list');
		$pabxconfs = $this->Pabxdado->Pabxconf->find('list');
		$placas = $this->Pabxdado->Placa->find('list');
		$this->set(compact('clientes', 'pabxconfs', 'placas'));
	}

/**
 * admib_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admib_delete($id = null) {
		$this->Pabxdado->id = $id;
		if (!$this->Pabxdado->exists()) {
			throw new NotFoundException(__('Invalid pabxdado'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Pabxdado->delete()) {
			return $this->flash(__('The pabxdado has been deleted.'), array('action' => 'index'));
		} else {
			return $this->flash(__('The pabxdado could not be deleted. Please, try again.'), array('action' => 'index'));
		}
	}
}
