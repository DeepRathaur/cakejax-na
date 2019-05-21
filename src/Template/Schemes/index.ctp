<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Scheme[]|\Cake\Collection\CollectionInterface $schemes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Scheme'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Zones'), ['controller' => 'Zones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Zone'), ['controller' => 'Zones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List States'), ['controller' => 'States', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New State'), ['controller' => 'States', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Districts'), ['controller' => 'Districts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New District'), ['controller' => 'Districts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="schemes index large-9 medium-8 columns content">
    <h3><?= __('Schemes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('parent_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('zone_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('state_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('district_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('scheme_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_from') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_to') ?></th>
                <th scope="col"><?= $this->Paginator->sort('insurance_type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('commission') ?></th>
                <th scope="col"><?= $this->Paginator->sort('target_amount') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($schemes as $scheme): ?>
            <tr>
                <td><?= $this->Number->format($scheme->id) ?></td>
                <td><?= $scheme->has('parent_scheme') ? $this->Html->link($scheme->parent_scheme->id, ['controller' => 'Schemes', 'action' => 'view', $scheme->parent_scheme->id]) : '' ?></td>
                <td><?= $scheme->has('zone') ? $this->Html->link($scheme->zone->id, ['controller' => 'Zones', 'action' => 'view', $scheme->zone->id]) : '' ?></td>
                <td><?= $scheme->has('state') ? $this->Html->link($scheme->state->id, ['controller' => 'States', 'action' => 'view', $scheme->state->id]) : '' ?></td>
                <td><?= $scheme->has('district') ? $this->Html->link($scheme->district->id, ['controller' => 'Districts', 'action' => 'view', $scheme->district->id]) : '' ?></td>
                <td><?= h($scheme->scheme_name) ?></td>
                <td><?= h($scheme->date_from) ?></td>
                <td><?= h($scheme->date_to) ?></td>
                <td><?= h($scheme->insurance_type) ?></td>
                <td><?= $this->Number->format($scheme->commission) ?></td>
                <td><?= $this->Number->format($scheme->target_amount) ?></td>
                <td><?= h($scheme->status) ?></td>
                <td><?= h($scheme->created) ?></td>
                <td><?= h($scheme->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $scheme->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $scheme->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $scheme->id], ['confirm' => __('Are you sure you want to delete # {0}?', $scheme->id)]) ?>
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
