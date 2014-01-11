<?php
App::uses('AppController', 'Controller');
/**
 * Stops Controller
 *
 * @property Stop $Stop
 * @property PaginatorComponent $Paginator
 */
class StopsController extends AppController {

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
		$this->Stop->recursive = 0;
		$this->set('stops', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Stop->exists($id)) {
			throw new NotFoundException(__('Invalid stop'));
		}
		$options = array('conditions' => array('Stop.' . $this->Stop->primaryKey => $id));
		$this->set('stop', $this->Stop->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Stop->create();
			if ($this->Stop->save($this->request->data)) {
				$this->Session->setFlash(__('The stop has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The stop could not be saved. Please, try again.'));
			}
		}
		$cards = $this->Stop->Card->find('list');
		$statuses = $this->Stop->Status->find('list');
		$this->set(compact('cards', 'statuses'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Stop->exists($id)) {
			throw new NotFoundException(__('Invalid stop'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Stop->save($this->request->data)) {
				$this->Session->setFlash(__('The stop has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The stop could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Stop.' . $this->Stop->primaryKey => $id));
			$this->request->data = $this->Stop->find('first', $options);
		}
		$cards = $this->Stop->Card->find('list');
		$statuses = $this->Stop->Status->find('list');
		$this->set(compact('cards', 'statuses'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Stop->id = $id;
		if (!$this->Stop->exists()) {
			throw new NotFoundException(__('Invalid stop'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Stop->delete()) {
			$this->Session->setFlash(__('The stop has been deleted.'));
		} else {
			$this->Session->setFlash(__('The stop could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
