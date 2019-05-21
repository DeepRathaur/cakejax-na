<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\District[]|\Cake\Collection\CollectionInterface $districts
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New District'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Zones'), ['controller' => 'Zones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Zone'), ['controller' => 'Zones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List States'), ['controller' => 'States', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New State'), ['controller' => 'States', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Admins'), ['controller' => 'Admins', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Admin'), ['controller' => 'Admins', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Crop Insurance Offline Calculators'), ['controller' => 'CropInsuranceOfflineCalculators', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Crop Insurance Offline Calculator'), ['controller' => 'CropInsuranceOfflineCalculators', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Customer Contact Details'), ['controller' => 'CustomerContactDetails', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer Contact Detail'), ['controller' => 'CustomerContactDetails', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Customer Land Hold Details'), ['controller' => 'CustomerLandHoldDetails', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer Land Hold Detail'), ['controller' => 'CustomerLandHoldDetails', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Schemes'), ['controller' => 'Schemes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Scheme'), ['controller' => 'Schemes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="districts index large-9 medium-8 columns content">
    <h3><?= __('Districts') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('zone_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('state_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('district_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($districts as $district): ?>
            <tr>
                <td><?= $this->Number->format($district->id) ?></td>
                <td><?= $district->has('zone') ? $this->Html->link($district->zone->id, ['controller' => 'Zones', 'action' => 'view', $district->zone->id]) : '' ?></td>
                <td><?= $district->has('state') ? $this->Html->link($district->state->id, ['controller' => 'States', 'action' => 'view', $district->state->id]) : '' ?></td>
                <td><?= h($district->district_name) ?></td>
                <td><?= h($district->created) ?></td>
                <td><?= h($district->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $district->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $district->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $district->id], ['confirm' => __('Are you sure you want to delete # {0}?', $district->id)]) ?>
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
