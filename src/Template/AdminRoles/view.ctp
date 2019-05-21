<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AdminRole $adminRole
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Admin Role'), ['action' => 'edit', $adminRole->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Admin Role'), ['action' => 'delete', $adminRole->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adminRole->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Admin Roles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Admin Role'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Admins'), ['controller' => 'Admins', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Admin'), ['controller' => 'Admins', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="adminRoles view large-9 medium-8 columns content">
    <h3><?= h($adminRole->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Admin') ?></th>
            <td><?= $adminRole->has('admin') ? $this->Html->link($adminRole->admin->name, ['controller' => 'Admins', 'action' => 'view', $adminRole->admin->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Role') ?></th>
            <td><?= $adminRole->has('role') ? $this->Html->link($adminRole->role->id, ['controller' => 'Roles', 'action' => 'view', $adminRole->role->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($adminRole->id) ?></td>
        </tr>
    </table>
</div>
