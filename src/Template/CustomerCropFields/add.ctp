<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CustomerCropField $customerCropField
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Customer Crop Fields'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="customerCropFields form large-9 medium-8 columns content">
    <?= $this->Form->create($customerCropField) ?>
    <fieldset>
        <legend><?= __('Add Customer Crop Field') ?></legend>
        <?php
            echo $this->Form->control('customer_id', ['options' => $customers]);
            echo $this->Form->control('login_id');
            echo $this->Form->control('farmer_classification');
            echo $this->Form->control('identity_type');
            echo $this->Form->control('identity_no');
            echo $this->Form->control('farmer_category');
            echo $this->Form->control('farmer_religion');
            echo $this->Form->control('farmer_community');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
