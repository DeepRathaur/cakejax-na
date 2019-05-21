<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CustomerContactDetail[]|\Cake\Collection\CollectionInterface $customerContactDetails
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Customer Contact Detail'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List States'), ['controller' => 'States', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New State'), ['controller' => 'States', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Districts'), ['controller' => 'Districts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New District'), ['controller' => 'Districts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="customerContactDetails index large-9 medium-8 columns content">
    <h3><?= __('Customer Contact Details') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('customer_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('login_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone_no') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mobile_no') ?></th>
                <th scope="col"><?= $this->Paginator->sort('post_office') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fax_no') ?></th>
                <th scope="col"><?= $this->Paginator->sort('city') ?></th>
                <th scope="col"><?= $this->Paginator->sort('state_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('district_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pin_code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($customerContactDetails as $customerContactDetail): ?>
            <tr>
                <td><?= $this->Number->format($customerContactDetail->id) ?></td>
                <td><?= $customerContactDetail->has('customer') ? $this->Html->link($customerContactDetail->customer->title, ['controller' => 'Customers', 'action' => 'view', $customerContactDetail->customer->id]) : '' ?></td>
                <td><?= h($customerContactDetail->login_id) ?></td>
                <td><?= h($customerContactDetail->phone_no) ?></td>
                <td><?= h($customerContactDetail->mobile_no) ?></td>
                <td><?= h($customerContactDetail->post_office) ?></td>
                <td><?= $this->Number->format($customerContactDetail->fax_no) ?></td>
                <td><?= h($customerContactDetail->city) ?></td>
                <td><?= $customerContactDetail->has('state') ? $this->Html->link($customerContactDetail->state->id, ['controller' => 'States', 'action' => 'view', $customerContactDetail->state->id]) : '' ?></td>
                <td><?= $customerContactDetail->has('district') ? $this->Html->link($customerContactDetail->district->id, ['controller' => 'Districts', 'action' => 'view', $customerContactDetail->district->id]) : '' ?></td>
                <td><?= h($customerContactDetail->email) ?></td>
                <td><?= $this->Number->format($customerContactDetail->pin_code) ?></td>
                <td><?= h($customerContactDetail->created) ?></td>
                <td><?= h($customerContactDetail->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $customerContactDetail->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $customerContactDetail->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $customerContactDetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customerContactDetail->id)]) ?>
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
