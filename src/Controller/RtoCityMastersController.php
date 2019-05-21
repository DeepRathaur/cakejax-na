<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * RtoCityMasters Controller
 *
 * @property \App\Model\Table\RtoCityMastersTable $RtoCityMasters
 *
 * @method \App\Model\Entity\RtoCityMaster[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RtoCityMastersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['States']
        ];
        $rtoCityMasters = $this->paginate($this->RtoCityMasters);

        $this->set(compact('rtoCityMasters'));
    }

    /**
     * View method
     *
     * @param string|null $id Rto City Master id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $rtoCityMaster = $this->RtoCityMasters->get($id, [
            'contain' => ['States']
        ]);

        $this->set('rtoCityMaster', $rtoCityMaster);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $rtoCityMaster = $this->RtoCityMasters->newEntity();
        if ($this->request->is('post')) {
            $rtoCityMaster = $this->RtoCityMasters->patchEntity($rtoCityMaster, $this->request->getData());
            if ($this->RtoCityMasters->save($rtoCityMaster)) {
                $this->Flash->success(__('The rto city master has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rto city master could not be saved. Please, try again.'));
        }
        $states = $this->RtoCityMasters->States->find('list', ['limit' => 200]);
        $this->set(compact('rtoCityMaster', 'states'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Rto City Master id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $rtoCityMaster = $this->RtoCityMasters->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $rtoCityMaster = $this->RtoCityMasters->patchEntity($rtoCityMaster, $this->request->getData());
            if ($this->RtoCityMasters->save($rtoCityMaster)) {
                $this->Flash->success(__('The rto city master has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rto city master could not be saved. Please, try again.'));
        }
        $states = $this->RtoCityMasters->States->find('list', ['limit' => 200]);
        $this->set(compact('rtoCityMaster', 'states'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Rto City Master id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $rtoCityMaster = $this->RtoCityMasters->get($id);
        if ($this->RtoCityMasters->delete($rtoCityMaster)) {
            $this->Flash->success(__('The rto city master has been deleted.'));
        } else {
            $this->Flash->error(__('The rto city master could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
