<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Customer[]|\Cake\Collection\CollectionInterface $customers
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Customer'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Zones'), ['controller' => 'Zones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Zone'), ['controller' => 'Zones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List States'), ['controller' => 'States', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New State'), ['controller' => 'States', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Districts'), ['controller' => 'Districts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New District'), ['controller' => 'Districts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Customer Bank Details'), ['controller' => 'CustomerBankDetails', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer Bank Detail'), ['controller' => 'CustomerBankDetails', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Customer Contact Details'), ['controller' => 'CustomerContactDetails', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer Contact Detail'), ['controller' => 'CustomerContactDetails', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Customer Crop Fields'), ['controller' => 'CustomerCropFields', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer Crop Field'), ['controller' => 'CustomerCropFields', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Customer Documents'), ['controller' => 'CustomerDocuments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer Document'), ['controller' => 'CustomerDocuments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Customer Insurance Types'), ['controller' => 'CustomerInsuranceTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer Insurance Type'), ['controller' => 'CustomerInsuranceTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Customer Land Hold Details'), ['controller' => 'CustomerLandHoldDetails', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer Land Hold Detail'), ['controller' => 'CustomerLandHoldDetails', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Customer Nominee Details'), ['controller' => 'CustomerNomineeDetails', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer Nominee Detail'), ['controller' => 'CustomerNomineeDetails', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="customers index large-9 medium-8 columns content">
    <h3><?= __('Customers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('login_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('parent_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('zone_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('state_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('district_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('aadhar_card') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pan_card') ?></th>
                <th scope="col"><?= $this->Paginator->sort('father_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dob') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gender') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mobile_no') ?></th>
                <th scope="col"><?= $this->Paginator->sort('occupation') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                <th scope="col"><?= $this->Paginator->sort('profile_picture') ?></th>
                <th scope="col"><?= $this->Paginator->sort('uuid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($customers as $customer): ?>
            <tr>
                <td><?= $this->Number->format($customer->id) ?></td>
                <td><?= h($customer->login_id) ?></td>
                <td><?= $customer->has('parent_customer') ? $this->Html->link($customer->parent_customer->title, ['controller' => 'Customers', 'action' => 'view', $customer->parent_customer->id]) : '' ?></td>
                <td><?= $customer->has('zone') ? $this->Html->link($customer->zone->id, ['controller' => 'Zones', 'action' => 'view', $customer->zone->id]) : '' ?></td>
                <td><?= $customer->has('state') ? $this->Html->link($customer->state->id, ['controller' => 'States', 'action' => 'view', $customer->state->id]) : '' ?></td>
                <td><?= $customer->has('district') ? $this->Html->link($customer->district->id, ['controller' => 'Districts', 'action' => 'view', $customer->district->id]) : '' ?></td>
                <td><?= h($customer->title) ?></td>
                <td><?= h($customer->fname) ?></td>
                <td><?= h($customer->mname) ?></td>
                <td><?= h($customer->lname) ?></td>
                <td><?= $this->Number->format($customer->aadhar_card) ?></td>
                <td><?= h($customer->pan_card) ?></td>
                <td><?= h($customer->father_name) ?></td>
                <td><?= h($customer->dob) ?></td>
                <td><?= h($customer->gender) ?></td>
                <td><?= h($customer->mobile_no) ?></td>
                <td><?= h($customer->occupation) ?></td>
                <td><?= h($customer->email) ?></td>
                <td><?= h($customer->password) ?></td>
                <td><?= h($customer->profile_picture) ?></td>
                <td><?= h($customer->uuid) ?></td>
                <td><?= h($customer->status) ?></td>
                <td><?= h($customer->created) ?></td>
                <td><?= h($customer->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $customer->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $customer->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $customer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customer->id)]) ?>
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
