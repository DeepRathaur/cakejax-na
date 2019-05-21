<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RtoCityMaster[]|\Cake\Collection\CollectionInterface $rtoCityMasters
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Rto City Master'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List States'), ['controller' => 'States', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New State'), ['controller' => 'States', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="rtoCityMasters index large-9 medium-8 columns content">
    <h3><?= __('Rto City Masters') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('city_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('state_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('region_code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('alias_region_code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rtoCityMasters as $rtoCityMaster): ?>
            <tr>
                <td><?= $this->Number->format($rtoCityMaster->id) ?></td>
                <td><?= h($rtoCityMaster->city_name) ?></td>
                <td><?= $rtoCityMaster->has('state') ? $this->Html->link($rtoCityMaster->state->id, ['controller' => 'States', 'action' => 'view', $rtoCityMaster->state->id]) : '' ?></td>
                <td><?= h($rtoCityMaster->region_code) ?></td>
                <td><?= h($rtoCityMaster->alias_region_code) ?></td>
                <td><?= h($rtoCityMaster->name) ?></td>
                <td><?= h($rtoCityMaster->created) ?></td>
                <td><?= h($rtoCityMaster->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $rtoCityMaster->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $rtoCityMaster->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $rtoCityMaster->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rtoCityMaster->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
