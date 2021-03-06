<?php
App::uses('AppController', 'Controller');
/**
 * ArosAcos Controller
 *
 * @property ArosAco $ArosAco
 * @property PaginatorComponent $Paginator
 */
class ArosAcosController extends AppController {

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
		$this->ArosAco->recursive = 0;
		$this->set('arosAcos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ArosAco->exists($id)) {
			throw new NotFoundException(__('Invalid aros aco'));
		}
		$options = array('conditions' => array('ArosAco.' . $this->ArosAco->primaryKey => $id));
		$this->set('arosAco', $this->ArosAco->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ArosAco->create();
			if ($this->ArosAco->save($this->request->data)) {
				$this->Session->setFlash(__('The aros aco has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The aros aco could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ArosAco->exists($id)) {
			throw new NotFoundException(__('Invalid aros aco'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ArosAco->save($this->request->data)) {
				$this->Session->setFlash(__('The aros aco has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The aros aco could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ArosAco.' . $this->ArosAco->primaryKey => $id));
			$this->request->data = $this->ArosAco->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ArosAco->id = $id;
		if (!$this->ArosAco->exists()) {
			throw new NotFoundException(__('Invalid aros aco'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ArosAco->delete()) {
			$this->Session->setFlash(__('The aros aco has been deleted.'));
		} else {
			$this->Session->setFlash(__('The aros aco could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
