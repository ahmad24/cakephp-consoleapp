<?php
App::uses('AppController', 'Controller');
/**
 * Car4Categories Controller
 *
 * @property Car4Category $Car4Category
 * @property PaginatorComponent $Paginator
 */
class Car4CategoriesController extends AppController {

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
		$this->Car4Category->recursive = 0;
		$this->set('car4Categories', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Car4Category->exists($id)) {
			throw new NotFoundException(__('Invalid car4 category'));
		}
		$options = array('conditions' => array('Car4Category.' . $this->Car4Category->primaryKey => $id));
		$this->set('car4Category', $this->Car4Category->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Car4Category->create();
			if ($this->Car4Category->save($this->request->data)) {
				$this->Session->setFlash(__('The car4 category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The car4 category could not be saved. Please, try again.'));
			}
		}
		$users = $this->Car4Category->User->find('list');
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
		if (!$this->Car4Category->exists($id)) {
			throw new NotFoundException(__('Invalid car4 category'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Car4Category->save($this->request->data)) {
				$this->Session->setFlash(__('The car4 category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The car4 category could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Car4Category.' . $this->Car4Category->primaryKey => $id));
			$this->request->data = $this->Car4Category->find('first', $options);
		}
		$users = $this->Car4Category->User->find('list');
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
		$this->Car4Category->id = $id;
		if (!$this->Car4Category->exists()) {
			throw new NotFoundException(__('Invalid car4 category'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Car4Category->delete()) {
			$this->Session->setFlash(__('The car4 category has been deleted.'));
		} else {
			$this->Session->setFlash(__('The car4 category could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
