<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CustomerCropField[]|\Cake\Collection\CollectionInterface $customerCropFields
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Customer Crop Field'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="customerCropFields index large-9 medium-8 columns content">
    <h3><?= __('Customer Crop Fields') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('customer_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('login_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('farmer_classification') ?></th>
                <th scope="col"><?= $this->Paginator->sort('identity_type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('identity_no') ?></th>
                <th scope="col"><?= $this->Paginator->sort('farmer_category') ?></th>
                <th scope="col"><?= $this->Paginator->sort('farmer_community') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($customerCropFields as $customerCropField): ?>
            <tr>
                <td><?= $this->Number->format($customerCropField->id) ?></td>
                <td><?= $customerCropField->has('customer') ? $this->Html->link($customerCropField->customer->title, ['controller' => 'Customers', 'action' => 'view', $customerCropField->customer->id]) : '' ?></td>
                <td><?= h($customerCropField->login_id) ?></td>
                <td><?= h($customerCropField->farmer_classification) ?></td>
                <td><?= h($customerCropField->identity_type) ?></td>
                <td><?= h($customerCropField->identity_no) ?></td>
                <td><?= h($customerCropField->farmer_category) ?></td>
                <td><?= h($customerCropField->farmer_community) ?></td>
                <td><?= h($customerCropField->created) ?></td>
                <td><?= h($customerCropField->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $customerCropField->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $customerCropField->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $customerCropField->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customerCropField->id)]) ?>
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
