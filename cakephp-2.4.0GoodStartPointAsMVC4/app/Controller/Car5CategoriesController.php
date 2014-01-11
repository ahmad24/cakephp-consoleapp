<?php
App::uses('AppController', 'Controller');
/**
 * Car5Categories Controller
 *
 * @property Car5Category $Car5Category
 * @property PaginatorComponent $Paginator
 */
class Car5CategoriesController extends AppController {

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
		$this->Car5Category->recursive = 0;
		$this->set('car5Categories', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Car5Category->exists($id)) {
			throw new NotFoundException(__('Invalid car5 category'));
		}
		$options = array('conditions' => array('Car5Category.' . $this->Car5Category->primaryKey => $id));
		$this->set('car5Category', $this->Car5Category->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Car5Category->create();
			if ($this->Car5Category->save($this->request->data)) {
				$this->Session->setFlash(__('The car5 category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The car5 category could not be saved. Please, try again.'));
			}
		}
		$users = $this->Car5Category->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Car5Category->exists($id)) {
			throw new NotFoundException(__('Invalid car5 category'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Car5Category->save($this->request->data)) {
				$this->Session->setFlash(__('The car5 category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The car5 category could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Car5Category.' . $this->Car5Category->primaryKey => $id));
			$this->request->data = $this->Car5Category->find('first', $options);
		}
		$users = $this->Car5Category->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Car5Category->id = $id;
		if (!$this->Car5Category->exists()) {
			throw new NotFoundException(__('Invalid car5 category'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Car5Category->delete()) {
			$this->Session->setFlash(__('The car5 category has been deleted.'));
		} else {
			$this->Session->setFlash(__('The car5 category could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
