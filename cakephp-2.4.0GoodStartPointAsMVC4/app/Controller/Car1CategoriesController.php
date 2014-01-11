<?php
App::uses('AppController', 'Controller');
/**
 * Car1Categories Controller
 *
 * @property Car1Category $Car1Category
 * @property PaginatorComponent $Paginator
 */
class Car1CategoriesController extends AppController {

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
		$this->Car1Category->recursive = 0;
		$this->set('car1Categories', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Car1Category->exists($id)) {
			throw new NotFoundException(__('Invalid car1 category'));
		}
		$options = array('conditions' => array('Car1Category.' . $this->Car1Category->primaryKey => $id));
		$this->set('car1Category', $this->Car1Category->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Car1Category->create();
			if ($this->Car1Category->save($this->request->data)) {
				$this->Session->setFlash(__('The car1 category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The car1 category could not be saved. Please, try again.'));
			}
		}
		$users = $this->Car1Category->User->find('list');
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
		if (!$this->Car1Category->exists($id)) {
			throw new NotFoundException(__('Invalid car1 category'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Car1Category->save($this->request->data)) {
				$this->Session->setFlash(__('The car1 category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The car1 category could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Car1Category.' . $this->Car1Category->primaryKey => $id));
			$this->request->data = $this->Car1Category->find('first', $options);
		}
		$users = $this->Car1Category->User->find('list');
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
		$this->Car1Category->id = $id;
		if (!$this->Car1Category->exists()) {
			throw new NotFoundException(__('Invalid car1 category'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Car1Category->delete()) {
			$this->Session->setFlash(__('The car1 category has been deleted.'));
		} else {
			$this->Session->setFlash(__('The car1 category could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
