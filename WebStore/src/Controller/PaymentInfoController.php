<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PaymentInfo Controller
 *
 * @property \App\Model\Table\PaymentInfoTable $PaymentInfo
 */
class PaymentInfoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Order', 'Payments']
        ];
        $paymentInfo = $this->paginate($this->PaymentInfo);

        $this->set(compact('paymentInfo'));
        $this->set('_serialize', ['paymentInfo']);
    }

    /**
     * View method
     *
     * @param string|null $id Payment Info id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $paymentInfo = $this->PaymentInfo->get($id, [
            'contain' => ['Order', 'Payments']
        ]);

        $this->set('paymentInfo', $paymentInfo);
        $this->set('_serialize', ['paymentInfo']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $paymentInfo = $this->PaymentInfo->newEntity();
        if ($this->request->is('post')) {
            $paymentInfo = $this->PaymentInfo->patchEntity($paymentInfo, $this->request->data);
            if ($this->PaymentInfo->save($paymentInfo)) {
                $this->Flash->success(__('The payment info has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The payment info could not be saved. Please, try again.'));
            }
        }
        $order = $this->PaymentInfo->Order->find('list', ['limit' => 200]);
        $payments = $this->PaymentInfo->Payments->find('list', ['limit' => 200]);
        $this->set(compact('paymentInfo', 'order', 'payments'));
        $this->set('_serialize', ['paymentInfo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Payment Info id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $paymentInfo = $this->PaymentInfo->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $paymentInfo = $this->PaymentInfo->patchEntity($paymentInfo, $this->request->data);
            if ($this->PaymentInfo->save($paymentInfo)) {
                $this->Flash->success(__('The payment info has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The payment info could not be saved. Please, try again.'));
            }
        }
        $order = $this->PaymentInfo->Order->find('list', ['limit' => 200]);
        $payments = $this->PaymentInfo->Payments->find('list', ['limit' => 200]);
        $this->set(compact('paymentInfo', 'order', 'payments'));
        $this->set('_serialize', ['paymentInfo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Payment Info id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $paymentInfo = $this->PaymentInfo->get($id);
        if ($this->PaymentInfo->delete($paymentInfo)) {
            $this->Flash->success(__('The payment info has been deleted.'));
        } else {
            $this->Flash->error(__('The payment info could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
