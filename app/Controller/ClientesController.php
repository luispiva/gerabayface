<?php

/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('Controller', 'Controller');
/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
App::import("Controller", "PabxconfsController");
class ClientesController extends Controller {
//Instacia a classe Pabxconfcontroller.php

    // a variavel Scanffold gera os controllers e views automaticamente 
    //public $scaffold;
    
    public $helpers = array('Html', 'Form');
    public $name = 'Clientes';
 
  
    //Lista Clientes
    function index() {
        $this->set('clientes', $this->Cliente->find('all'));
       
    }
    public function getPabxconfs()
    {
        $funfa = $this->Cliente->Pabxconf->find('list', array ( 'fields' => 'id', 'nome'));
                $this->set(compact($funfa));
    }
    // Cadastra novo Cliente
    public function add() {
       
            
        $this->set('title', 'Novo Cliente');
        if ($this->request->is("post")) {
            $this->Cliente->create();
            if ($this->Cliente->saveAssociated($this->request->data)) {
                $this->Session->setFlash(__("Registro salvo com sucesso."));
                $this->redirect(array("action" => '/index/'));
            } else {
                $this->Session->setFlash(__("Erro: não foi possível salvar o registro."));
                $this->redirect(array("action" => '/add/'));
            }
            self::getPabxconfs();
        }
    }
    //Editar Cliente
    public function edit($id = NULL) {
        $this->Cliente->id = $id;
        if (!$this->Cliente->exists()) {
            throw new NotFoundException(__('Registro não encontrado.'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Cliente->saveAssociated($this->request->data)) {
                $this->Session->setFlash(__('Registro salvo com sucesso.'));
                $this->redirect(array('action' => '/index/'));
            } else {
                $this->Session->setFlash(__('Erro: não foi possível salvar o registro.'));
            }
        } else {
            $this->request->data = $this->Cliente->read(NULL, $id);
        }
    }
    //Excluir Cliente
    public function delete($id = NULL) {
        if (!$id) {
            $this->Session->setFlash('ID inválido');
            $this->redirect(array('action' => 'index'));
        }

        if ($this->Cliente->delete($id)) {
            $this->Session->setFlash('Cliente deletado');
            $this->redirect(array('action' => 'index'));
        }

        $this->Session->setFlash('Cliente não foi deletado');
        $this->redirect(array('action' => 'index'));
    }

}

?>