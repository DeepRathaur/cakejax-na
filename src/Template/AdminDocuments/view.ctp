<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AdminDocument $adminDocument
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Admin Document'), ['action' => 'edit', $adminDocument->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Admin Document'), ['action' => 'delete', $adminDocument->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adminDocument->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Admin Documents'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Admin Document'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="adminDocuments view large-9 medium-8 columns content">
    <h3><?= h($adminDocument->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Admin Login Id') ?></th>
            <td><?= h($adminDocument->admin_login_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Admin Documents') ?></th>
            <td><?= h($adminDocument->admin_documents) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($adminDocument->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($adminDocument->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($adminDocument->modified) ?></td>
        </tr>
    </table>
</div>
