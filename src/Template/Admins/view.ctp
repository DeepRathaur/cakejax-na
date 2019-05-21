<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Admin $admin
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Admin'), ['action' => 'edit', $admin->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Admin'), ['action' => 'delete', $admin->id], ['confirm' => __('Are you sure you want to delete # {0}?', $admin->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Admins'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Admin'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Parent Admins'), ['controller' => 'Admins', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Parent Admin'), ['controller' => 'Admins', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Zones'), ['controller' => 'Zones', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Zone'), ['controller' => 'Zones', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List States'), ['controller' => 'States', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New State'), ['controller' => 'States', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Districts'), ['controller' => 'Districts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New District'), ['controller' => 'Districts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Admin Roles'), ['controller' => 'AdminRoles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Admin Role'), ['controller' => 'AdminRoles', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Child Admins'), ['controller' => 'Admins', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Child Admin'), ['controller' => 'Admins', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="admins view large-9 medium-8 columns content">
    <h3><?= h($admin->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Login Id') ?></th>
            <td><?= h($admin->login_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Parent Admin') ?></th>
            <td><?= $admin->has('parent_admin') ? $this->Html->link($admin->parent_admin->name, ['controller' => 'Admins', 'action' => 'view', $admin->parent_admin->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Role') ?></th>
            <td><?= $admin->has('role') ? $this->Html->link($admin->role->id, ['controller' => 'Roles', 'action' => 'view', $admin->role->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Zone') ?></th>
            <td><?= $admin->has('zone') ? $this->Html->link($admin->zone->id, ['controller' => 'Zones', 'action' => 'view', $admin->zone->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('State') ?></th>
            <td><?= $admin->has('state') ? $this->Html->link($admin->state->id, ['controller' => 'States', 'action' => 'view', $admin->state->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('District') ?></th>
            <td><?= $admin->has('district') ? $this->Html->link($admin->district->id, ['controller' => 'Districts', 'action' => 'view', $admin->district->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Employee Id') ?></th>
            <td><?= h($admin->employee_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($admin->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pan Card') ?></th>
            <td><?= h($admin->pan_card) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Father Name') ?></th>
            <td><?= h($admin->father_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dob') ?></th>
            <td><?= h($admin->dob) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gender') ?></th>
            <td><?= h($admin->gender) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mobile No') ?></th>
            <td><?= h($admin->mobile_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Education') ?></th>
            <td><?= h($admin->education) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($admin->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($admin->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Profile Picture') ?></th>
            <td><?= h($admin->profile_picture) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($admin->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Aadhar Card') ?></th>
            <td><?= $this->Number->format($admin->aadhar_card) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($admin->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($admin->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $admin->status ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Address') ?></h4>
        <?= $this->Text->autoParagraph(h($admin->address)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Admin Roles') ?></h4>
        <?php if (!empty($admin->admin_roles)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Admin Id') ?></th>
                <th scope="col"><?= __('Role Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($admin->admin_roles as $adminRoles): ?>
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
        <?php if (!empty($admin->child_admins)): ?>
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
            <?php foreach ($admin->child_admins as $childAdmins): ?>
            <tr>
                <td><?= h($childAdmins->id) ?></td>
                <td><?= h($childAdmins->login_id) ?></td>
                <td><?= h($childAdmins->parent_id) ?></td>
                <td><?= h($childAdmins->role_id) ?></td>
                <td><?= h($childAdmins->zone_id) ?></td>
                <td><?= h($childAdmins->state_id) ?></td>
                <td><?= h($childAdmins->district_id) ?></td>
                <td><?= h($childAdmins->employee_id) ?></td>
                <td><?= h($childAdmins->name) ?></td>
                <td><?= h($childAdmins->aadhar_card) ?></td>
                <td><?= h($childAdmins->pan_card) ?></td>
                <td><?= h($childAdmins->father_name) ?></td>
                <td><?= h($childAdmins->dob) ?></td>
                <td><?= h($childAdmins->gender) ?></td>
                <td><?= h($childAdmins->mobile_no) ?></td>
                <td><?= h($childAdmins->education) ?></td>
                <td><?= h($childAdmins->address) ?></td>
                <td><?= h($childAdmins->email) ?></td>
                <td><?= h($childAdmins->password) ?></td>
                <td><?= h($childAdmins->profile_picture) ?></td>
                <td><?= h($childAdmins->status) ?></td>
                <td><?= h($childAdmins->created) ?></td>
                <td><?= h($childAdmins->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Admins', 'action' => 'view', $childAdmins->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Admins', 'action' => 'edit', $childAdmins->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Admins', 'action' => 'delete', $childAdmins->id], ['confirm' => __('Are you sure you want to delete # {0}?', $childAdmins->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
