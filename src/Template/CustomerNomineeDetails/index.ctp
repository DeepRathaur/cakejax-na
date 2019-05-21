<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CustomerNomineeDetail[]|\Cake\Collection\CollectionInterface $customerNomineeDetails
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Customer Nominee Detail'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="customerNomineeDetails index large-9 medium-8 columns content">
    <h3><?= __('Customer Nominee Details') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('customer_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('login_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nominee_title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nominee_fname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nominee_mname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nominee_lname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('relation') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($customerNomineeDetails as $customerNomineeDetail): ?>
            <tr>
                <td><?= $this->Number->format($customerNomineeDetail->id) ?></td>
                <td><?= $customerNomineeDetail->has('customer') ? $this->Html->link($customerNomineeDetail->customer->title, ['controller' => 'Customers', 'action' => 'view', $customerNomineeDetail->customer->id]) : '' ?></td>
                <td><?= h($customerNomineeDetail->login_id) ?></td>
                <td><?= h($customerNomineeDetail->nominee_title) ?></td>
                <td><?= h($customerNomineeDetail->nominee_fname) ?></td>
                <td><?= h($customerNomineeDetail->nominee_mname) ?></td>
                <td><?= h($customerNomineeDetail->nominee_lname) ?></td>
                <td><?= h($customerNomineeDetail->relation) ?></td>
                <td><?= h($customerNomineeDetail->created) ?></td>
                <td><?= h($customerNomineeDetail->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $customerNomineeDetail->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $customerNomineeDetail->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $customerNomineeDetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customerNomineeDetail->id)]) ?>
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
