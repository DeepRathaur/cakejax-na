<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Role $role
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Role'), ['action' => 'edit', $role->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Role'), ['action' => 'delete', $role->id], ['confirm' => __('Are you sure you want to delete # {0}?', $role->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Roles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Role'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Admin Roles'), ['controller' => 'AdminRoles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Admin Role'), ['controller' => 'AdminRoles', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Admins'), ['controller' => 'Admins', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Admin'), ['controller' => 'Admins', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Role Permissions'), ['controller' => 'RolePermissions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Role Permission'), ['controller' => 'RolePermissions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="roles view large-9 medium-8 columns content">
    <h3><?= h($role->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Role Name') ?></th>
            <td><?= h($role->role_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($role->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($role->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($role->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Admin Roles') ?></h4>
        <?php if (!empty($role->admin_roles)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Admin Id') ?></th>
                <th scope="col"><?= __('Role Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($role->admin_roles as $adminRoles): ?>
            <tr>
                <td><?= h($adminRoles->id) ?></td>
                <td><?= h($adminRoles->admin_id) ?></td>
                <td><?= h($adminRoles->role_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'AdminRoles', 'action' => 'view', $adminRoles->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'AdminRoles', 'action' => 'edit', $adminRoles->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'AdminRoles', 'action' => 'delete', $adminRoles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adminRoles->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Admins') ?></h4>
        <?php if (!empty($role->admins)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Login Id') ?></th>
                <th scope="col"><?= __('Parent Id') ?></th>
                <th scope="col"><?= __('Role Id') ?></th>
                <th scope="col"><?= __('Zone Id') ?></th>
                <th scope="col"><?= __('State Id') ?></th>
                <th scope="col"><?= __('District Id') ?></th>
                <th scope="col"><?= __('Employee Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Aadhar Card') ?></th>
                <th scope="col"><?= __('Pan Card') ?></th>
                <th scope="col"><?= __('Father Name') ?></th>
                <th scope="col"><?= __('Dob') ?></th>
                <th scope="col"><?= __('Gender') ?></th>
                <th scope="col"><?= __('Mobile No') ?></th>
                <th scope="col"><?= __('Education') ?></th>
                <th scope="col"><?= __('Address') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Password') ?></th>
                <th scope="col"><?= __('Profile Picture') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($role->admins as $admins): ?>
            <tr>
                <td><?= h($admins->id) ?></td>
                <td><?= h($admins->login_id) ?></td>
                <td><?= h($admins->parent_id) ?></td>
                <td><?= h($admins->role_id) ?></td>
                <td><?= h($admins->zone_id) ?></td>
                <td><?= h($admins->state_id) ?></td>
                <td><?= h($admins->district_id) ?></td>
                <td><?= h($admins->employee_id) ?></td>
                <td><?= h($admins->name) ?></td>
                <td><?= h($admins->aadhar_card) ?></td>
                <td><?= h($admins->pan_card) ?></td>
                <td><?= h($admins->father_name) ?></td>
                <td><?= h($admins->dob) ?></td>
                <td><?= h($admins->gender) ?></td>
                <td><?= h($admins->mobile_no) ?></td>
                <td><?= h($admins->education) ?></td>
                <td><?= h($admins->address) ?></td>
                <td><?= h($admins->email) ?></td>
                <td><?= h($admins->password) ?></td>
                <td><?= h($admins->profile_picture) ?></td>
                <td><?= h($admins->status) ?></td>
                <td><?= h($admins->created) ?></td>
                <td><?= h($admins->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Admins', 'action' => 'view', $admins->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Admins', 'action' => 'edit', $admins->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Admins', 'action' => 'delete', $admins->id], ['confirm' => __('Are you sure you want to delete # {0}?', $admins->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Role Permissions') ?></h4>
        <?php if (!empty($role->role_permissions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Role Id') ?></th>
                <th scope="col"><?= __('Permission Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($role->role_permissions as $rolePermissions): ?>
            <tr>
                <td><?= h($rolePermissions->id) ?></td>
                <td><?= h($rolePermissions->role_id) ?></td>
                <td><?= h($rolePermissions->permission_id) ?></td>
                <td><?= h($rolePermissions->created) ?></td>
                <td><?= h($rolePermissions->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'RolePermissions', 'action' => 'view', $rolePermissions->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'RolePermissions', 'action' => 'edit', $rolePermissions->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'RolePermissions', 'action' => 'delete', $rolePermissions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rolePermissions->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
