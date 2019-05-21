<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CropMasters Controller
 *
 * @property \App\Model\Table\CropMastersTable $CropMasters
 *
 * @method \App\Model\Entity\CropMaster[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CropMastersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['CroppingSeasons']
        ];
        $cropMasters = $this->paginate($this->CropMasters);

        $this->set(compact('cropMasters'));
    }

    /**
     * View method
     *
     * @param string|null $id Crop Master id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cropMaster = $this->CropMasters->get($id, [
            'contain' => ['CroppingSeasons']
        ]);

        $this->set('cropMaster', $cropMaster);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cropMaster = $this->CropMasters->newEntity();
        if ($this->request->is('post')) {
            $cropMaster = $this->CropMasters->patchEntity($cropMaster, $this->request->getData());
            if ($this->CropMasters->save($cropMaster)) {
                $this->Flash->success(__('The crop master has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The crop master could not be saved. Please, try again.'));
        }
        $croppingSeasons = $this->CropMasters->CroppingSeasons->find('list', ['limit' => 200]);
        $this->set(compact('cropMaster', 'croppingSeasons'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Crop Master id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cropMaster = $this->CropMasters->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cropMaster = $this->CropMasters->patchEntity($cropMaster, $this->request->getData());
            if ($this->CropMasters->save($cropMaster)) {
                $this->Flash->success(__('The crop master has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The crop master could not be saved. Please, try again.'));
        }
        $croppingSeasons = $this->CropMasters->CroppingSeasons->find('list', ['limit' => 200]);
        $this->set(compact('cropMaster', 'croppingSeasons'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Crop Master id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cropMaster = $this->CropMasters->get($id);
        if ($this->CropMasters->delete($cropMaster)) {
            $this->Flash->success(__('The crop master has been deleted.'));
        } else {
            $this->Flash->error(__('The crop master could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
