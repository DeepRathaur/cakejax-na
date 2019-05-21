<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CustomerInsuranceType $customerInsuranceType
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Customer Insurance Type'), ['action' => 'edit', $customerInsuranceType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Customer Insurance Type'), ['action' => 'delete', $customerInsuranceType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customerInsuranceType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Customer Insurance Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer Insurance Type'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="customerInsuranceTypes view large-9 medium-8 columns content">
    <h3><?= h($customerInsuranceType->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Customer') ?></th>
            <td><?= $customerInsuranceType->has('customer') ? $this->Html->link($customerInsuranceType->customer->title, ['controller' => 'Customers', 'action' => 'view', $customerInsuranceType->customer->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Login Id') ?></th>
            <td><?= h($customerInsuranceType->login_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Insurance Type Name') ?></th>
            <td><?= h($customerInsuranceType->insurance_type_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($customerInsuranceType->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($customerInsuranceType->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($customerInsuranceType->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $customerInsuranceType->status ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
