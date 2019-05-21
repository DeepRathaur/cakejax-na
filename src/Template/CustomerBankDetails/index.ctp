<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CustomerBankDetail[]|\Cake\Collection\CollectionInterface $customerBankDetails
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Customer Bank Detail'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="customerBankDetails index large-9 medium-8 columns content">
    <h3><?= __('Customer Bank Details') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('customer_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('login_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('account_holder_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bank_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('branch_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ifs_code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('account_type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('account_no') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bank_phone_no') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($customerBankDetails as $customerBankDetail): ?>
            <tr>
                <td><?= $this->Number->format($customerBankDetail->id) ?></td>
                <td><?= $customerBankDetail->has('customer') ? $this->Html->link($customerBankDetail->customer->title, ['controller' => 'Customers', 'action' => 'view', $customerBankDetail->customer->id]) : '' ?></td>
                <td><?= h($customerBankDetail->login_id) ?></td>
                <td><?= h($customerBankDetail->account_holder_name) ?></td>
                <td><?= h($customerBankDetail->bank_name) ?></td>
                <td><?= h($customerBankDetail->branch_name) ?></td>
                <td><?= h($customerBankDetail->ifs_code) ?></td>
                <td><?= h($customerBankDetail->account_type) ?></td>
                <td><?= h($customerBankDetail->account_no) ?></td>
                <td><?= h($customerBankDetail->bank_phone_no) ?></td>
                <td><?= h($customerBankDetail->created) ?></td>
                <td><?= h($customerBankDetail->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $customerBankDetail->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $customerBankDetail->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $customerBankDetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customerBankDetail->id)]) ?>
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
