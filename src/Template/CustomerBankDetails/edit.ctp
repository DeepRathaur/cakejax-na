<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CustomerBankDetail $customerBankDetail
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $customerBankDetail->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $customerBankDetail->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Customer Bank Details'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="customerBankDetails form large-9 medium-8 columns content">
    <?= $this->Form->create($customerBankDetail) ?>
    <fieldset>
        <legend><?= __('Edit Customer Bank Detail') ?></legend>
        <?php
            echo $this->Form->control('customer_id', ['options' => $customers]);
            echo $this->Form->control('login_id');
            echo $this->Form->control('account_holder_name');
            echo $this->Form->control('bank_name');
            echo $this->Form->control('branch_name');
            echo $this->Form->control('ifs_code');
            echo $this->Form->control('branch_address');
            echo $this->Form->control('account_type');
            echo $this->Form->control('account_no');
            echo $this->Form->control('bank_phone_no');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
