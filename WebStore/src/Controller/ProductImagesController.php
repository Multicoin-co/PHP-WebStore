<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ProductImages Controller
 *
 * @property \App\Model\Table\ProductImagesTable $ProductImages
 */
class ProductImagesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Product']
        ];
        $productImages = $this->paginate($this->ProductImages);

        $this->set(compact('productImages'));
        $this->set('_serialize', ['productImages']);
    }

    /**
     * View method
     *
     * @param string|null $id Product Image id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $productImage = $this->ProductImages->get($id, [
            'contain' => ['Product']
        ]);

        $this->set('productImage', $productImage);
        $this->set('_serialize', ['productImage']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $productImage = $this->ProductImages->newEntity();
        if ($this->request->is('post')) {
            $productImage = $this->ProductImages->patchEntity($productImage, $this->request->data);
            if ($this->ProductImages->save($productImage)) {
                $this->Flash->success(__('The product image has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The product image could not be saved. Please, try again.'));
            }
        }
        $product = $this->ProductImages->Product->find('list', ['limit' => 200]);
        $this->set(compact('productImage', 'product'));
        $this->set('_serialize', ['productImage']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Product Image id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $productImage = $this->ProductImages->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $productImage = $this->ProductImages->patchEntity($productImage, $this->request->data);
            if ($this->ProductImages->save($productImage)) {
                $this->Flash->success(__('The product image has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The product image could not be saved. Please, try again.'));
            }
        }
        $product = $this->ProductImages->Product->find('list', ['limit' => 200]);
        $this->set(compact('productImage', 'product'));
        $this->set('_serialize', ['productImage']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Product Image id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $productImage = $this->ProductImages->get($id);
        if ($this->ProductImages->delete($productImage)) {
            $this->Flash->success(__('The product image has been deleted.'));
        } else {
            $this->Flash->error(__('The product image could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
