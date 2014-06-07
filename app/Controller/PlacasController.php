<?php
App::uses('AppController', 'Controller');
/**
 * Placas Controller
 *
 * @property Placa $Placa
 * @property PaginatorComponent $Paginator
 */
class PlacasController extends AppController {

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
		$this->Placa->recursive = 0;
		$this->set('placas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Placa->exists($id)) {
			throw new NotFoundException(__('Invalid placa'));
		}
		$options = array('conditions' => array('Placa.' . $this->Placa->primaryKey => $id));
		$this->set('placa', $this->Placa->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Placa->create();
			if ($this->Placa->save($this->request->data)) {
				return $this->flash(__('The placa has been saved.'), array('action' => 'index'));
			}
		}
		$pabxconfs = $this->Placa->Pabxconf->find('list');
		$this->set(compact('pabxconfs'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Placa->exists($id)) {
			throw new NotFoundException(__('Invalid placa'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Placa->save($this->request->data)) {
				return $this->flash(__('The placa has been saved.'), array('action' => 'index'));
			}
		} else {
			$options = array('conditions' => array('Placa.' . $this->Placa->primaryKey => $id));
			$this->request->data = $this->Placa->find('first', $options);
		}
		$pabxconfs = $this->Placa->Pabxconf->find('list');
		$this->set(compact('pabxconfs'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Placa->id = $id;
		if (!$this->Placa->exists()) {
			throw new NotFoundException(__('Invalid placa'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Placa->delete()) {
			return $this->flash(__('The placa has been deleted.'), array('action' => 'index'));
		} else {
			return $this->flash(__('The placa could not be deleted. Please, try again.'), array('action' => 'index'));
		}
	}

/**
 * admib_index method
 *
 * @return void
 */
	public function admib_index() {
		$this->Placa->recursive = 0;
		$this->set('placas', $this->Paginator->paginate());
	}

/**
 * admib_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admib_view($id = null) {
		if (!$this->Placa->exists($id)) {
			throw new NotFoundException(__('Invalid placa'));
		}
		$options = array('conditions' => array('Placa.' . $this->Placa->primaryKey => $id));
		$this->set('placa', $this->Placa->find('first', $options));
	}

/**
 * admib_add method
 *
 * @return void
 */
	public function admib_add() {
		if ($this->request->is('post')) {
			$this->Placa->create();
			if ($this->Placa->save($this->request->data)) {
				return $this->flash(__('The placa has been saved.'), array('action' => 'index'));
			}
		}
		$pabxconfs = $this->Placa->Pabxconf->find('list');
		$this->set(compact('pabxconfs'));
	}

/**
 * admib_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admib_edit($id = null) {
		if (!$this->Placa->exists($id)) {
			throw new NotFoundException(__('Invalid placa'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Placa->save($this->request->data)) {
				return $this->flash(__('The placa has been saved.'), array('action' => 'index'));
			}
		} else {
			$options = array('conditions' => array('Placa.' . $this->Placa->primaryKey => $id));
			$this->request->data = $this->Placa->find('first', $options);
		}
		$pabxconfs = $this->Placa->Pabxconf->find('list');
		$this->set(compact('pabxconfs'));
	}

/**
 * admib_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admib_delete($id = null) {
		$this->Placa->id = $id;
		if (!$this->Placa->exists()) {
			throw new NotFoundException(__('Invalid placa'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Placa->delete()) {
			return $this->flash(__('The placa has been deleted.'), array('action' => 'index'));
		} else {
			return $this->flash(__('The placa could not be deleted. Please, try again.'), array('action' => 'index'));
		}
	}
}
