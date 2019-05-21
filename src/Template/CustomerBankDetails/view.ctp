<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CustomerBankDetail $customerBankDetail
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Customer Bank Detail'), ['action' => 'edit', $customerBankDetail->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Customer Bank Detail'), ['action' => 'delete', $customerBankDetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customerBankDetail->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Customer Bank Details'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer Bank Detail'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="customerBankDetails view large-9 medium-8 columns content">
    <h3><?= h($customerBankDetail->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Customer') ?></th>
            <td><?= $customerBankDetail->has('customer') ? $this->Html->link($customerBankDetail->customer->title, ['controller' => 'Customers', 'action' => 'view', $customerBankDetail->customer->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Login Id') ?></th>
            <td><?= h($customerBankDetail->login_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Account Holder Name') ?></th>
            <td><?= h($customerBankDetail->account_holder_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bank Name') ?></th>
            <td><?= h($customerBankDetail->bank_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Branch Name') ?></th>
            <td><?= h($customerBankDetail->branch_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ifs Code') ?></th>
            <td><?= h($customerBankDetail->ifs_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Account Type') ?></th>
            <td><?= h($customerBankDetail->account_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Account No') ?></th>
            <td><?= h($customerBankDetail->account_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bank Phone No') ?></th>
            <td><?= h($customerBankDetail->bank_phone_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($customerBankDetail->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($customerBankDetail->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($customerBankDetail->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Branch Address') ?></h4>
        <?= $this->Text->autoParagraph(h($customerBankDetail->branch_address)); ?>
    </div>
</div>
