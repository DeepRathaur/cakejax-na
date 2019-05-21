<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * RtoStateMasters Controller
 *
 * @property \App\Model\Table\RtoStateMastersTable $RtoStateMasters
 *
 * @method \App\Model\Entity\RtoStateMaster[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RtoStateMastersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $rtoStateMasters = $this->paginate($this->RtoStateMasters);

        $this->set(compact('rtoStateMasters'));
    }

    /**
     * View method
     *
     * @param string|null $id Rto State Master id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $rtoStateMaster = $this->RtoStateMasters->get($id, [
            'contain' => []
        ]);

        $this->set('rtoStateMaster', $rtoStateMaster);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $rtoStateMaster = $this->RtoStateMasters->newEntity();
        if ($this->request->is('post')) {
            $rtoStateMaster = $this->RtoStateMasters->patchEntity($rtoStateMaster, $this->request->getData());
            if ($this->RtoStateMasters->save($rtoStateMaster)) {
                $this->Flash->success(__('The rto state master has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rto state master could not be saved. Please, try again.'));
        }
        $this->set(compact('rtoStateMaster'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Rto State Master id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $rtoStateMaster = $this->RtoStateMasters->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $rtoStateMaster = $this->RtoStateMasters->patchEntity($rtoStateMaster, $this->request->getData());
            if ($this->RtoStateMasters->save($rtoStateMaster)) {
                $this->Flash->success(__('The rto state master has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rto state master could not be saved. Please, try again.'));
        }
        $this->set(compact('rtoStateMaster'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Rto State Master id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $rtoStateMaster = $this->RtoStateMasters->get($id);
        if ($this->RtoStateMasters->delete($rtoStateMaster)) {
            $this->Flash->success(__('The rto state master has been deleted.'));
        } else {
            $this->Flash->error(__('The rto state master could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
