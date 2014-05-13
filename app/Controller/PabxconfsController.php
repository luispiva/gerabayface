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
class PabxconfsController extends Controller {

    //public $scaffold;
    public $helpers = array("Form", "Html");

    public function index() {
        $this->set('pabxconfs', $this->Pabxconf->find('all'));
    }
    // Cadastra novo Cliente
    public function add() {
        $this->set('title', 'Novo PABX');
        if ($this->request->is("post")) {
            $this->Pabxconf->create();
            if ($this->Pabxconf->saveAssociated($this->request->data)) {
                $this->Session->setFlash(__("Registro salvo com sucesso."));
                $this->redirect(array("action" => '/index/'));
            } else {
                $this->Session->setFlash(__("Erro: não foi possível salvar o registro."));
                $this->redirect(array("action" => '/add/'));
            }
        }
    }
     //Editar Modelo PABX
    public function edit($id = NULL) {
        $this->Pabxconf->id = $id;
        if (!$this->Pabxconf->exists()) {
            throw new NotFoundException(__('Registro não encontrado.'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Pabxconf->saveAssociated($this->request->data)) {
                $this->Session->setFlash(__('Registro salvo com sucesso.'));
                $this->redirect(array('action' => '/index/'));
            } else {
                $this->Session->setFlash(__('Erro: não foi possível salvar o registro.'));
            }
        } else {
            $this->request->data = $this->Pabxconf->read(NULL, $id);
        }
    }
    //Excluir Modelo PABX
    public function delete($id = NULL) {
        if (!$id) {
            $this->Session->setFlash('ID inválido');
            $this->redirect(array('action' => 'index'));
        }

        if ($this->Pabxconf->delete($id)) {
            $this->Session->setFlash('Modelo PABX deletado');
            $this->redirect(array('action' => 'index'));
        }

        $this->Session->setFlash('Modelo PABX não foi deletado');
        $this->redirect(array('action' => 'index'));
    }

}

?>