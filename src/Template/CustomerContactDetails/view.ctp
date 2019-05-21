<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CustomerContactDetail $customerContactDetail
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Customer Contact Detail'), ['action' => 'edit', $customerContactDetail->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Customer Contact Detail'), ['action' => 'delete', $customerContactDetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customerContactDetail->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Customer Contact Details'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer Contact Detail'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List States'), ['controller' => 'States', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New State'), ['controller' => 'States', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Districts'), ['controller' => 'Districts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New District'), ['controller' => 'Districts', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="customerContactDetails view large-9 medium-8 columns content">
    <h3><?= h($customerContactDetail->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Customer') ?></th>
            <td><?= $customerContactDetail->has('customer') ? $this->Html->link($customerContactDetail->customer->title, ['controller' => 'Customers', 'action' => 'view', $customerContactDetail->customer->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Login Id') ?></th>
            <td><?= h($customerContactDetail->login_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone No') ?></th>
            <td><?= h($customerContactDetail->phone_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mobile No') ?></th>
            <td><?= h($customerContactDetail->mobile_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Post Office') ?></th>
            <td><?= h($customerContactDetail->post_office) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City') ?></th>
            <td><?= h($customerContactDetail->city) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('State') ?></th>
            <td><?= $customerContactDetail->has('state') ? $this->Html->link($customerContactDetail->state->id, ['controller' => 'States', 'action' => 'view', $customerContactDetail->state->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('District') ?></th>
            <td><?= $customerContactDetail->has('district') ? $this->Html->link($customerContactDetail->district->id, ['controller' => 'Districts', 'action' => 'view', $customerContactDetail->district->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($customerContactDetail->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($customerContactDetail->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fax No') ?></th>
            <td><?= $this->Number->format($customerContactDetail->fax_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pin Code') ?></th>
            <td><?= $this->Number->format($customerContactDetail->pin_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($customerContactDetail->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($customerContactDetail->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Address1') ?></h4>
        <?= $this->Text->autoParagraph(h($customerContactDetail->address1)); ?>
    </div>
    <div class="row">
        <h4><?= __('Address2') ?></h4>
        <?= $this->Text->autoParagraph(h($customerContactDetail->address2)); ?>
    </div>
</div>
