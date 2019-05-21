<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RtoCityMaster $rtoCityMaster
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Rto City Master'), ['action' => 'edit', $rtoCityMaster->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Rto City Master'), ['action' => 'delete', $rtoCityMaster->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rtoCityMaster->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Rto City Masters'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Rto City Master'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List States'), ['controller' => 'States', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New State'), ['controller' => 'States', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="rtoCityMasters view large-9 medium-8 columns content">
    <h3><?= h($rtoCityMaster->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('City Name') ?></th>
            <td><?= h($rtoCityMaster->city_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('State') ?></th>
            <td><?= $rtoCityMaster->has('state') ? $this->Html->link($rtoCityMaster->state->id, ['controller' => 'States', 'action' => 'view', $rtoCityMaster->state->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Region Code') ?></th>
            <td><?= h($rtoCityMaster->region_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Alias Region Code') ?></th>
            <td><?= h($rtoCityMaster->alias_region_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($rtoCityMaster->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($rtoCityMaster->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($rtoCityMaster->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($rtoCityMaster->modified) ?></td>
        </tr>
    </table>
</div>
