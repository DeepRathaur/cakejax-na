<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserDocument $userDocument
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User Document'), ['action' => 'edit', $userDocument->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User Document'), ['action' => 'delete', $userDocument->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userDocument->id)]) ?> </li>
        <li><?= $this->Html->link(__('List User Documents'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Document'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="userDocuments view large-9 medium-8 columns content">
    <h3><?= h($userDocument->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $userDocument->has('user') ? $this->Html->link($userDocument->user->name, ['controller' => 'Users', 'action' => 'view', $userDocument->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Documents') ?></th>
            <td><?= h($userDocument->user_documents) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address Proof') ?></th>
            <td><?= h($userDocument->address_proof) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Proof') ?></th>
            <td><?= h($userDocument->id_proof) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Certificate') ?></th>
            <td><?= h($userDocument->certificate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Educational Certificate') ?></th>
            <td><?= h($userDocument->educational_certificate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($userDocument->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($userDocument->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($userDocument->modified) ?></td>
        </tr>
    </table>
</div>
