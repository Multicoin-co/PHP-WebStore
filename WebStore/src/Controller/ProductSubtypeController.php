<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * ProductSubtype Controller
 *
 * @property \App\Model\Table\ProductSubtypeTable $ProductSubtype
 */
class ProductSubtypeController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $productSubtype = $this->paginate($this->ProductSubtype);

        $this->set(compact('productSubtype'));
        $this->set('_serialize', ['productSubtype']);
    }

    /**
     * View method
     *
     * @param string|null $id Product Subtype id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $productSubtype = $this->ProductSubtype->get($id, [
            'contain' => ['ProductType']
        ]);

        $this->set('productSubtype', $productSubtype);
        $this->set('_serialize', ['productSubtype']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
	// Load Product Types Table
	$product_type_table = TableRegistry::get('ProductType');

	// Query for all types
	$product_types = $product_type_table->find('list');

	// Create a Product Subtype object to save the POST data
        $productSubtype = $this->ProductSubtype->newEntity();
        if ($this->request->is('post')) {
            $productSubtype = $this->ProductSubtype->patchEntity($productSubtype, $this->request->data);
            if ($this->ProductSubtype->save($productSubtype)) {
                $this->Flash->success(__('The product subtype has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The product subtype could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('productSubtype', 'product_types'));
        $this->set('_serialize', ['productSubtype', 'product_types']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Product Subtype id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
	$product_type_table = TableRegistry::get('ProductType');

	$product_types = $product_type_table->find('list');
        $productSubtype = $this->ProductSubtype->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $productSubtype = $this->ProductSubtype->patchEntity($productSubtype, $this->request->data);
            if ($this->ProductSubtype->save($productSubtype)) {
                $this->Flash->success(__('The product subtype has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The product subtype could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('productSubtype', 'product_types'));
        $this->set('_serialize', ['productSubtype', 'product_types']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Product Subtype id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $productSubtype = $this->ProductSubtype->get($id);
        if ($this->ProductSubtype->delete($productSubtype)) {
            $this->Flash->success(__('The product subtype has been deleted.'));
        } else {
            $this->Flash->error(__('The product subtype could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
