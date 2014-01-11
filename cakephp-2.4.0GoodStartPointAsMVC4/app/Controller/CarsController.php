<?php
App::uses('AppController', 'Controller');
/**
 * Cars Controller
 *
 * @property Car $Car
 * @property PaginatorComponent $Paginator
 */
class CarsController extends AppController {

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
		$this->Car->recursive = 0;
		$this->set('cars', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Car->exists($id)) {
			throw new NotFoundException(__('Invalid car'));
		}
		$options = array('conditions' => array('Car.' . $this->Car->primaryKey => $id));
		$this->set('car', $this->Car->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Car->create();
			if ($this->Car->save($this->request->data)) {
				$this->Session->setFlash(__('The car has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The car could not be saved. Please, try again.'));
			}
		}
		$customers = $this->Car->Customer->find('list');
		$car1Categories = $this->Car->Car1Categorie->find('list');
		$car2Categories = $this->Car->Car2Categorie->find('list');
		$car3Categories = $this->Car->Car3Categorie->find('list');
		$car4Categories = $this->Car->Car4Categorie->find('list');
		$car5Categories = $this->Car->Car5Categorie->find('list');
		$users = $this->Car->User->find('list');
		$owners = $this->Car->Owner->find('list');
		$this->set(compact('customers', 'car1Categories', 'car2Categories', 'car3Categories', 'car4Categories', 'car5Categories', 'users', 'owners'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Car->exists($id)) {
			throw new NotFoundException(__('Invalid car'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Car->save($this->request->data)) {
				$this->Session->setFlash(__('The car has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The car could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Car.' . $this->Car->primaryKey => $id));
			$this->request->data = $this->Car->find('first', $options);
		}
		$customers = $this->Car->Customer->find('list');
		$car1Categories = $this->Car->Car1Categorie->find('list');
		$car2Categories = $this->Car->Car2Categorie->find('list');
		$car3Categories = $this->Car->Car3Categorie->find('list');
		$car4Categories = $this->Car->Car4Categorie->find('list');
		$car5Categories = $this->Car->Car5Categorie->find('list');
		$users = $this->Car->User->find('list');
		$owners = $this->Car->Owner->find('list');
		$this->set(compact('customers', 'car1Categories', 'car2Categories', 'car3Categories', 'car4Categories', 'car5Categories', 'users', 'owners'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Car->id = $id;
		if (!$this->Car->exists()) {
			throw new NotFoundException(__('Invalid car'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Car->delete()) {
			$this->Session->setFlash(__('The car has been deleted.'));
		} else {
			$this->Session->setFlash(__('The car could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
