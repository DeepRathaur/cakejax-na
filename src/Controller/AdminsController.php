<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Admins Controller
 *
 * @property \App\Model\Table\AdminsTable $Admins
 *
 * @method \App\Model\Entity\Admin[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AdminsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Logins', 'ParentAdmins', 'Roles', 'Zones', 'States', 'Districts', 'Employees']
        ];
        $admins = $this->paginate($this->Admins);

        $this->set(compact('admins'));
    }

    /**
     * View method
     *
     * @param string|null $id Admin id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $admin = $this->Admins->get($id, [
            'contain' => ['Logins', 'ParentAdmins', 'Roles', 'Zones', 'States', 'Districts', 'Employees', 'AdminRoles', 'ChildAdmins']
        ]);

        $this->set('admin', $admin);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $admin = $this->Admins->newEntity();
        if ($this->request->is('post')) {
            $admin = $this->Admins->patchEntity($admin, $this->request->getData());
            if ($this->Admins->save($admin)) {
                $this->Flash->success(__('The admin has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The admin could not be saved. Please, try again.'));
        }
        $logins = $this->Admins->Logins->find('list', ['limit' => 200]);
        $parentAdmins = $this->Admins->ParentAdmins->find('list', ['limit' => 200]);
        $roles = $this->Admins->Roles->find('list', ['limit' => 200]);
        $zones = $this->Admins->Zones->find('list', ['limit' => 200]);
        $states = $this->Admins->States->find('list', ['limit' => 200]);
        $districts = $this->Admins->Districts->find('list', ['limit' => 200]);
        $employees = $this->Admins->Employees->find('list', ['limit' => 200]);
        $this->set(compact('admin', 'logins', 'parentAdmins', 'roles', 'zones', 'states', 'districts', 'employees'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Admin id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $admin = $this->Admins->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $admin = $this->Admins->patchEntity($admin, $this->request->getData());
            if ($this->Admins->save($admin)) {
                $this->Flash->success(__('The admin has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The admin could not be saved. Please, try again.'));
        }
        $logins = $this->Admins->Logins->find('list', ['limit' => 200]);
        $parentAdmins = $this->Admins->ParentAdmins->find('list', ['limit' => 200]);
        $roles = $this->Admins->Roles->find('list', ['limit' => 200]);
        $zones = $this->Admins->Zones->find('list', ['limit' => 200]);
        $states = $this->Admins->States->find('list', ['limit' => 200]);
        $districts = $this->Admins->Districts->find('list', ['limit' => 200]);
        $employees = $this->Admins->Employees->find('list', ['limit' => 200]);
        $this->set(compact('admin', 'logins', 'parentAdmins', 'roles', 'zones', 'states', 'districts', 'employees'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Admin id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $admin = $this->Admins->get($id);
        if ($this->Admins->delete($admin)) {
            $this->Flash->success(__('The admin has been deleted.'));
        } else {
            $this->Flash->error(__('The admin could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
