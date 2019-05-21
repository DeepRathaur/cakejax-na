<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserLanguage $userLanguage
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User Language'), ['action' => 'edit', $userLanguage->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User Language'), ['action' => 'delete', $userLanguage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userLanguage->id)]) ?> </li>
        <li><?= $this->Html->link(__('List User Languages'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Language'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="userLanguages view large-9 medium-8 columns content">
    <h3><?= h($userLanguage->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $userLanguage->has('user') ? $this->Html->link($userLanguage->user->name, ['controller' => 'Users', 'action' => 'view', $userLanguage->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Proficiency Level') ?></th>
            <td><?= h($userLanguage->proficiency_level) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Read') ?></th>
            <td><?= h($userLanguage->read) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Write') ?></th>
            <td><?= h($userLanguage->write) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Speak') ?></th>
            <td><?= h($userLanguage->speak) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($userLanguage->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Language Id') ?></th>
            <td><?= $this->Number->format($userLanguage->language_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($userLanguage->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($userLanguage->modified) ?></td>
        </tr>
    </table>
</div>
