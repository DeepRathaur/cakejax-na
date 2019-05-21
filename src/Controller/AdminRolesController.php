<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AdminRoles Controller
 *
 * @property \App\Model\Table\AdminRolesTable $AdminRoles
 *
 * @method \App\Model\Entity\AdminRole[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AdminRolesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Admins', 'Roles']
        ];
        $adminRoles = $this->paginate($this->AdminRoles);

        $this->set(compact('adminRoles'));
    }

    /**
     * View method
     *
     * @param string|null $id Admin Role id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $adminRole = $this->AdminRoles->get($id, [
            'contain' => ['Admins', 'Roles']
        ]);

        $this->set('adminRole', $adminRole);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $adminRole = $this->AdminRoles->newEntity();
        if ($this->request->is('post')) {
            $adminRole = $this->AdminRoles->patchEntity($adminRole, $this->request->getData());
            if ($this->AdminRoles->save($adminRole)) {
                $this->Flash->success(__('The admin role has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The admin role could not be saved. Please, try again.'));
        }
        $admins = $this->AdminRoles->Admins->find('list', ['limit' => 200]);
        $roles = $this->AdminRoles->Roles->find('list', ['limit' => 200]);
        $this->set(compact('adminRole', 'admins', 'roles'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Admin Role id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $adminRole = $this->AdminRoles->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $adminRole = $this->AdminRoles->patchEntity($adminRole, $this->request->getData());
            if ($this->AdminRoles->save($adminRole)) {
                $this->Flash->success(__('The admin role has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The admin role could not be saved. Please, try again.'));
        }
        $admins = $this->AdminRoles->Admins->find('list', ['limit' => 200]);
        $roles = $this->AdminRoles->Roles->find('list', ['limit' => 200]);
        $this->set(compact('adminRole', 'admins', 'roles'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Admin Role id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $adminRole = $this->AdminRoles->get($id);
        if ($this->AdminRoles->delete($adminRole)) {
            $this->Flash->success(__('The admin role has been deleted.'));
        } else {
            $this->Flash->error(__('The admin role could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
