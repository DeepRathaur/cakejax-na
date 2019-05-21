<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CustomerNomineeDetail $customerNomineeDetail
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Customer Nominee Detail'), ['action' => 'edit', $customerNomineeDetail->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Customer Nominee Detail'), ['action' => 'delete', $customerNomineeDetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customerNomineeDetail->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Customer Nominee Details'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer Nominee Detail'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="customerNomineeDetails view large-9 medium-8 columns content">
    <h3><?= h($customerNomineeDetail->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Customer') ?></th>
            <td><?= $customerNomineeDetail->has('customer') ? $this->Html->link($customerNomineeDetail->customer->title, ['controller' => 'Customers', 'action' => 'view', $customerNomineeDetail->customer->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Login Id') ?></th>
            <td><?= h($customerNomineeDetail->login_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nominee Title') ?></th>
            <td><?= h($customerNomineeDetail->nominee_title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nominee Fname') ?></th>
            <td><?= h($customerNomineeDetail->nominee_fname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nominee Mname') ?></th>
            <td><?= h($customerNomineeDetail->nominee_mname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nominee Lname') ?></th>
            <td><?= h($customerNomineeDetail->nominee_lname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Relation') ?></th>
            <td><?= h($customerNomineeDetail->relation) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($customerNomineeDetail->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($customerNomineeDetail->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($customerNomineeDetail->modified) ?></td>
        </tr>
    </table>
</div>
