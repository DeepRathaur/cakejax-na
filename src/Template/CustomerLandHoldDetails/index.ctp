<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CustomerLandHoldDetail[]|\Cake\Collection\CollectionInterface $customerLandHoldDetails
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Customer Land Hold Detail'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List States'), ['controller' => 'States', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New State'), ['controller' => 'States', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Districts'), ['controller' => 'Districts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New District'), ['controller' => 'Districts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="customerLandHoldDetails index large-9 medium-8 columns content">
    <h3><?= __('Customer Land Hold Details') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('customer_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('login_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('surveyno1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('surveyno2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('extentofland') ?></th>
                <th scope="col"><?= $this->Paginator->sort('city') ?></th>
                <th scope="col"><?= $this->Paginator->sort('block') ?></th>
                <th scope="col"><?= $this->Paginator->sort('state_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('district_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pin_code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('extentofland2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('city2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('block2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('state_id2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('district_id2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pin_code2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($customerLandHoldDetails as $customerLandHoldDetail): ?>
            <tr>
                <td><?= $this->Number->format($customerLandHoldDetail->id) ?></td>
                <td><?= $customerLandHoldDetail->has('customer') ? $this->Html->link($customerLandHoldDetail->customer->title, ['controller' => 'Customers', 'action' => 'view', $customerLandHoldDetail->customer->id]) : '' ?></td>
                <td><?= h($customerLandHoldDetail->login_id) ?></td>
                <td><?= $this->Number->format($customerLandHoldDetail->surveyno1) ?></td>
                <td><?= $this->Number->format($customerLandHoldDetail->surveyno2) ?></td>
                <td><?= h($customerLandHoldDetail->extentofland) ?></td>
                <td><?= h($customerLandHoldDetail->city) ?></td>
                <td><?= h($customerLandHoldDetail->block) ?></td>
                <td><?= $customerLandHoldDetail->has('state') ? $this->Html->link($customerLandHoldDetail->state->id, ['controller' => 'States', 'action' => 'view', $customerLandHoldDetail->state->id]) : '' ?></td>
                <td><?= $customerLandHoldDetail->has('district') ? $this->Html->link($customerLandHoldDetail->district->id, ['controller' => 'Districts', 'action' => 'view', $customerLandHoldDetail->district->id]) : '' ?></td>
                <td><?= $this->Number->format($customerLandHoldDetail->pin_code) ?></td>
                <td><?= h($customerLandHoldDetail->extentofland2) ?></td>
                <td><?= h($customerLandHoldDetail->city2) ?></td>
                <td><?= h($customerLandHoldDetail->block2) ?></td>
                <td><?= $this->Number->format($customerLandHoldDetail->state_id2) ?></td>
                <td><?= $this->Number->format($customerLandHoldDetail->district_id2) ?></td>
                <td><?= $this->Number->format($customerLandHoldDetail->pin_code2) ?></td>
                <td><?= h($customerLandHoldDetail->created) ?></td>
                <td><?= h($customerLandHoldDetail->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $customerLandHoldDetail->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $customerLandHoldDetail->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $customerLandHoldDetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customerLandHoldDetail->id)]) ?>
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
