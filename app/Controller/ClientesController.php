<?php
/**
 * @WebAPP GeraBayface
 * @framework CakePHP
 * 
 * @autor Luis H. Piva Mendes
 */
App::uses('AppController', 'Controller');
/**
 * Clientes Controller
 *
 * @property Cliente $Cliente
 * @property PaginatorComponent $Paginator
 */
class ClientesController extends AppController {

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
		$this->Cliente->recursive = 0;
		$this->set('clientes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Cliente->exists($id)) {
			throw new NotFoundException(__('Invalid cliente'));
		}
		$options = array('conditions' => array('Cliente.' . $this->Cliente->primaryKey => $id));
		$this->set('cliente', $this->Cliente->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Cliente->create();
			if ($this->Cliente->save($this->request->data)) {
				return $this->flash(__('The cliente has been saved.'), array('action' => 'index'));
			}
		}
		$pabxconfs = $this->Cliente->Pabxconf->find('list');
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
		if (!$this->Cliente->exists($id)) {
			throw new NotFoundException(__('Invalid cliente'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Cliente->save($this->request->data)) {
				return $this->flash(__('The cliente has been saved.'), array('action' => 'index'));
			}
		} else {
			$options = array('conditions' => array('Cliente.' . $this->Cliente->primaryKey => $id));
			$this->request->data = $this->Cliente->find('first', $options);
		}
		$pabxconfs = $this->Cliente->Pabxconf->find('list');
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
		$this->Cliente->id = $id;
		if (!$this->Cliente->exists()) {
			throw new NotFoundException(__('Invalid cliente'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Cliente->delete()) {
			return $this->flash(__('The cliente has been deleted.'), array('action' => 'index'));
		} else {
			return $this->flash(__('The cliente could not be deleted. Please, try again.'), array('action' => 'index'));
		}
	}

/**
 * admib_index method
 *
 * @return void
 */
	public function admib_index() {
		$this->Cliente->recursive = 0;
		$this->set('clientes', $this->Paginator->paginate());
	}

/**
 * admib_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admib_view($id = null) {
		if (!$this->Cliente->exists($id)) {
			throw new NotFoundException(__('Invalid cliente'));
		}
		$options = array('conditions' => array('Cliente.' . $this->Cliente->primaryKey => $id));
		$this->set('cliente', $this->Cliente->find('first', $options));
	}

/**
 * admib_add method
 *
 * @return void
 */
	public function admib_add() {
		if ($this->request->is('post')) {
			$this->Cliente->create();
			if ($this->Cliente->save($this->request->data)) {
				return $this->flash(__('The cliente has been saved.'), array('action' => 'index'));
			}
		}
		$pabxconfs = $this->Cliente->Pabxconf->find('list');
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
		if (!$this->Cliente->exists($id)) {
			throw new NotFoundException(__('Invalid cliente'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Cliente->save($this->request->data)) {
				return $this->flash(__('The cliente has been saved.'), array('action' => 'index'));
			}
		} else {
			$options = array('conditions' => array('Cliente.' . $this->Cliente->primaryKey => $id));
			$this->request->data = $this->Cliente->find('first', $options);
		}
		$pabxconfs = $this->Cliente->Pabxconf->find('list');
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
		$this->Cliente->id = $id;
		if (!$this->Cliente->exists()) {
			throw new NotFoundException(__('Invalid cliente'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Cliente->delete()) {
			return $this->flash(__('The cliente has been deleted.'), array('action' => 'index'));
		} else {
			return $this->flash(__('The cliente could not be deleted. Please, try again.'), array('action' => 'index'));
		}
	}
}
