<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UserDocuments Controller
 *
 * @property \App\Model\Table\UserDocumentsTable $UserDocuments
 *
 * @method \App\Model\Entity\UserDocument[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UserDocumentsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $userDocuments = $this->paginate($this->UserDocuments);

        $this->set(compact('userDocuments'));
    }

    /**
     * View method
     *
     * @param string|null $id User Document id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $userDocument = $this->UserDocuments->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('userDocument', $userDocument);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $userDocument = $this->UserDocuments->newEntity();
        if ($this->request->is('post')) {
            $userDocument = $this->UserDocuments->patchEntity($userDocument, $this->request->getData());
            if ($this->UserDocuments->save($userDocument)) {
                $this->Flash->success(__('The user document has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user document could not be saved. Please, try again.'));
        }
        $users = $this->UserDocuments->Users->find('list', ['limit' => 200]);
        $this->set(compact('userDocument', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User Document id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $userDocument = $this->UserDocuments->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $userDocument = $this->UserDocuments->patchEntity($userDocument, $this->request->getData());
            if ($this->UserDocuments->save($userDocument)) {
                $this->Flash->success(__('The user document has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user document could not be saved. Please, try again.'));
        }
        $users = $this->UserDocuments->Users->find('list', ['limit' => 200]);
        $this->set(compact('userDocument', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User Document id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userDocument = $this->UserDocuments->get($id);
        if ($this->UserDocuments->delete($userDocument)) {
            $this->Flash->success(__('The user document has been deleted.'));
        } else {
            $this->Flash->error(__('The user document could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
