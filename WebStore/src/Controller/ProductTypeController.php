<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ProductType Controller
 *
 * @property \App\Model\Table\ProductTypeTable $ProductType
 */
class ProductTypeController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $productType = $this->paginate($this->ProductType);

        $this->set(compact('productType'));
        $this->set('_serialize', ['productType']);
    }

    /**
     * View method
     *
     * @param string|null $id Product Type id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $productType = $this->ProductType->get($id, [
            'contain' => []
        ]);

        $this->set('productType', $productType);
        $this->set('_serialize', ['productType']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $productType = $this->ProductType->newEntity();
        if ($this->request->is('post')) {
            $productType = $this->ProductType->patchEntity($productType, $this->request->data);
            if ($this->ProductType->save($productType)) {
                $this->Flash->success(__('The product type has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The product type could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('productType'));
        $this->set('_serialize', ['productType']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Product Type id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $productType = $this->ProductType->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $productType = $this->ProductType->patchEntity($productType, $this->request->data);
            if ($this->ProductType->save($productType)) {
                $this->Flash->success(__('The product type has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The product type could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('productType'));
        $this->set('_serialize', ['productType']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Product Type id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $productType = $this->ProductType->get($id);
        if ($this->ProductType->delete($productType)) {
            $this->Flash->success(__('The product type has been deleted.'));
        } else {
            $this->Flash->error(__('The product type could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
