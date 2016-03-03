<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Paypal Controller
 *
 * @property \App\Model\Table\PaypalTable $Paypal
 */
class PaypalController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $paypal = $this->paginate($this->Paypal);

        $this->set(compact('paypal'));
        $this->set('_serialize', ['paypal']);
    }

    /**
     * View method
     *
     * @param string|null $id Paypal id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $paypal = $this->Paypal->get($id, [
            'contain' => []
        ]);

        $this->set('paypal', $paypal);
        $this->set('_serialize', ['paypal']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $paypal = $this->Paypal->newEntity();
        if ($this->request->is('post')) {
            $paypal = $this->Paypal->patchEntity($paypal, $this->request->data);
            if ($this->Paypal->save($paypal)) {
                $this->Flash->success(__('The paypal has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The paypal could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('paypal'));
        $this->set('_serialize', ['paypal']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Paypal id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $paypal = $this->Paypal->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $paypal = $this->Paypal->patchEntity($paypal, $this->request->data);
            if ($this->Paypal->save($paypal)) {
                $this->Flash->success(__('The paypal has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The paypal could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('paypal'));
        $this->set('_serialize', ['paypal']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Paypal id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $paypal = $this->Paypal->get($id);
        if ($this->Paypal->delete($paypal)) {
            $this->Flash->success(__('The paypal has been deleted.'));
        } else {
            $this->Flash->error(__('The paypal could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
