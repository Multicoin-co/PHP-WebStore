<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Cardpaymentdetails Controller
 *
 * @property \App\Model\Table\CardpaymentdetailsTable $Cardpaymentdetails
 */
class CardpaymentdetailsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $cardpaymentdetails = $this->paginate($this->Cardpaymentdetails);

        $this->set(compact('cardpaymentdetails'));
        $this->set('_serialize', ['cardpaymentdetails']);
    }

    /**
     * View method
     *
     * @param string|null $id Cardpaymentdetail id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cardpaymentdetail = $this->Cardpaymentdetails->get($id, [
            'contain' => []
        ]);

        $this->set('cardpaymentdetail', $cardpaymentdetail);
        $this->set('_serialize', ['cardpaymentdetail']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cardpaymentdetail = $this->Cardpaymentdetails->newEntity();
        if ($this->request->is('post')) {
            $cardpaymentdetail = $this->Cardpaymentdetails->patchEntity($cardpaymentdetail, $this->request->data);
            if ($this->Cardpaymentdetails->save($cardpaymentdetail)) {
                $this->Flash->success(__('The cardpaymentdetail has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The cardpaymentdetail could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('cardpaymentdetail'));
        $this->set('_serialize', ['cardpaymentdetail']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Cardpaymentdetail id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cardpaymentdetail = $this->Cardpaymentdetails->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cardpaymentdetail = $this->Cardpaymentdetails->patchEntity($cardpaymentdetail, $this->request->data);
            if ($this->Cardpaymentdetails->save($cardpaymentdetail)) {
                $this->Flash->success(__('The cardpaymentdetail has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The cardpaymentdetail could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('cardpaymentdetail'));
        $this->set('_serialize', ['cardpaymentdetail']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Cardpaymentdetail id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cardpaymentdetail = $this->Cardpaymentdetails->get($id);
        if ($this->Cardpaymentdetails->delete($cardpaymentdetail)) {
            $this->Flash->success(__('The cardpaymentdetail has been deleted.'));
        } else {
            $this->Flash->error(__('The cardpaymentdetail could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
