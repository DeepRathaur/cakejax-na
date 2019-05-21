<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ClaimRecords Controller
 *
 * @property \App\Model\Table\ClaimRecordsTable $ClaimRecords
 *
 * @method \App\Model\Entity\ClaimRecord[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ClaimRecordsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $claimRecords = $this->paginate($this->ClaimRecords);

        $this->set(compact('claimRecords'));
    }

    /**
     * View method
     *
     * @param string|null $id Claim Record id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $claimRecord = $this->ClaimRecords->get($id, [
            'contain' => []
        ]);

        $this->set('claimRecord', $claimRecord);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $claimRecord = $this->ClaimRecords->newEntity();
        if ($this->request->is('post')) {
            $claimRecord = $this->ClaimRecords->patchEntity($claimRecord, $this->request->getData());
            if ($this->ClaimRecords->save($claimRecord)) {
                $this->Flash->success(__('The claim record has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The claim record could not be saved. Please, try again.'));
        }
        $this->set(compact('claimRecord'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Claim Record id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $claimRecord = $this->ClaimRecords->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $claimRecord = $this->ClaimRecords->patchEntity($claimRecord, $this->request->getData());
            if ($this->ClaimRecords->save($claimRecord)) {
                $this->Flash->success(__('The claim record has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The claim record could not be saved. Please, try again.'));
        }
        $this->set(compact('claimRecord'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Claim Record id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $claimRecord = $this->ClaimRecords->get($id);
        if ($this->ClaimRecords->delete($claimRecord)) {
            $this->Flash->success(__('The claim record has been deleted.'));
        } else {
            $this->Flash->error(__('The claim record could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
