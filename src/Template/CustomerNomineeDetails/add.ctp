<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CustomerNomineeDetail $customerNomineeDetail
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Customer Nominee Details'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="customerNomineeDetails form large-9 medium-8 columns content">
    <?= $this->Form->create($customerNomineeDetail) ?>
    <fieldset>
        <legend><?= __('Add Customer Nominee Detail') ?></legend>
        <?php
            echo $this->Form->control('customer_id', ['options' => $customers]);
            echo $this->Form->control('login_id');
            echo $this->Form->control('nominee_title');
            echo $this->Form->control('nominee_fname');
            echo $this->Form->control('nominee_mname');
            echo $this->Form->control('nominee_lname');
            echo $this->Form->control('relation');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
