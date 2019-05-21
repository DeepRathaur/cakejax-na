<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AdminDocuments Controller
 *
 * @property \App\Model\Table\AdminDocumentsTable $AdminDocuments
 *
 * @method \App\Model\Entity\AdminDocument[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AdminDocumentsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['AdminLogins']
        ];
        $adminDocuments = $this->paginate($this->AdminDocuments);

        $this->set(compact('adminDocuments'));
    }

    /**
     * View method
     *
     * @param string|null $id Admin Document id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $adminDocument = $this->AdminDocuments->get($id, [
            'contain' => ['AdminLogins']
        ]);

        $this->set('adminDocument', $adminDocument);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $adminDocument = $this->AdminDocuments->newEntity();
        if ($this->request->is('post')) {
            $adminDocument = $this->AdminDocuments->patchEntity($adminDocument, $this->request->getData());
            if ($this->AdminDocuments->save($adminDocument)) {
                $this->Flash->success(__('The admin document has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The admin document could not be saved. Please, try again.'));
        }
        $adminLogins = $this->AdminDocuments->AdminLogins->find('list', ['limit' => 200]);
        $this->set(compact('adminDocument', 'adminLogins'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Admin Document id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $adminDocument = $this->AdminDocuments->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $adminDocument = $this->AdminDocuments->patchEntity($adminDocument, $this->request->getData());
            if ($this->AdminDocuments->save($adminDocument)) {
                $this->Flash->success(__('The admin document has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The admin document could not be saved. Please, try again.'));
        }
        $adminLogins = $this->AdminDocuments->AdminLogins->find('list', ['limit' => 200]);
        $this->set(compact('adminDocument', 'adminLogins'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Admin Document id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $adminDocument = $this->AdminDocuments->get($id);
        if ($this->AdminDocuments->delete($adminDocument)) {
            $this->Flash->success(__('The admin document has been deleted.'));
        } else {
            $this->Flash->error(__('The admin document could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
