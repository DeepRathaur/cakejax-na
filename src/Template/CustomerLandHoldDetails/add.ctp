<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CustomerLandHoldDetail $customerLandHoldDetail
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Customer Land Hold Details'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List States'), ['controller' => 'States', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New State'), ['controller' => 'States', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Districts'), ['controller' => 'Districts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New District'), ['controller' => 'Districts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="customerLandHoldDetails form large-9 medium-8 columns content">
    <?= $this->Form->create($customerLandHoldDetail) ?>
    <fieldset>
        <legend><?= __('Add Customer Land Hold Detail') ?></legend>
        <?php
            echo $this->Form->control('customer_id', ['options' => $customers]);
            echo $this->Form->control('login_id');
            echo $this->Form->control('surveyno1');
            echo $this->Form->control('surveyno2');
            echo $this->Form->control('extentofland');
            echo $this->Form->control('city');
            echo $this->Form->control('block');
            echo $this->Form->control('state_id', ['options' => $states]);
            echo $this->Form->control('district_id', ['options' => $districts]);
            echo $this->Form->control('pin_code');
            echo $this->Form->control('extentofland2');
            echo $this->Form->control('city2');
            echo $this->Form->control('block2');
            echo $this->Form->control('state_id2');
            echo $this->Form->control('district_id2');
            echo $this->Form->control('pin_code2');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
