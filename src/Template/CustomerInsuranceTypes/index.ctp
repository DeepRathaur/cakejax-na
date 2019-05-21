<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CustomerInsuranceType[]|\Cake\Collection\CollectionInterface $customerInsuranceTypes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Customer Insurance Type'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="customerInsuranceTypes index large-9 medium-8 columns content">
    <h3><?= __('Customer Insurance Types') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('customer_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('login_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('insurance_type_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($customerInsuranceTypes as $customerInsuranceType): ?>
            <tr>
                <td><?= $this->Number->format($customerInsuranceType->id) ?></td>
                <td><?= $customerInsuranceType->has('customer') ? $this->Html->link($customerInsuranceType->customer->title, ['controller' => 'Customers', 'action' => 'view', $customerInsuranceType->customer->id]) : '' ?></td>
                <td><?= h($customerInsuranceType->login_id) ?></td>
                <td><?= h($customerInsuranceType->insurance_type_name) ?></td>
                <td><?= h($customerInsuranceType->status) ?></td>
                <td><?= h($customerInsuranceType->created) ?></td>
                <td><?= h($customerInsuranceType->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $customerInsuranceType->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $customerInsuranceType->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $customerInsuranceType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customerInsuranceType->id)]) ?>
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
