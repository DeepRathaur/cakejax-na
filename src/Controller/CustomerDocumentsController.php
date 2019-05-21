<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CustomerDocuments Controller
 *
 * @property \App\Model\Table\CustomerDocumentsTable $CustomerDocuments
 *
 * @method \App\Model\Entity\CustomerDocument[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CustomerDocumentsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Customers', 'Logins']
        ];
        $customerDocuments = $this->paginate($this->CustomerDocuments);

        $this->set(compact('customerDocuments'));
    }

    /**
     * View method
     *
     * @param string|null $id Customer Document id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $customerDocument = $this->CustomerDocuments->get($id, [
            'contain' => ['Customers', 'Logins']
        ]);

        $this->set('customerDocument', $customerDocument);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $customerDocument = $this->CustomerDocuments->newEntity();
        if ($this->request->is('post')) {
            $customerDocument = $this->CustomerDocuments->patchEntity($customerDocument, $this->request->getData());
            if ($this->CustomerDocuments->save($customerDocument)) {
                $this->Flash->success(__('The customer document has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The customer document could not be saved. Please, try again.'));
        }
        $customers = $this->CustomerDocuments->Customers->find('list', ['limit' => 200]);
        $logins = $this->CustomerDocuments->Logins->find('list', ['limit' => 200]);
        $this->set(compact('customerDocument', 'customers', 'logins'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Customer Document id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $customerDocument = $this->CustomerDocuments->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $customerDocument = $this->CustomerDocuments->patchEntity($customerDocument, $this->request->getData());
            if ($this->CustomerDocuments->save($customerDocument)) {
                $this->Flash->success(__('The customer document has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The customer document could not be saved. Please, try again.'));
        }
        $customers = $this->CustomerDocuments->Customers->find('list', ['limit' => 200]);
        $logins = $this->CustomerDocuments->Logins->find('list', ['limit' => 200]);
        $this->set(compact('customerDocument', 'customers', 'logins'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Customer Document id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $customerDocument = $this->CustomerDocuments->get($id);
        if ($this->CustomerDocuments->delete($customerDocument)) {
            $this->Flash->success(__('The customer document has been deleted.'));
        } else {
            $this->Flash->error(__('The customer document could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
