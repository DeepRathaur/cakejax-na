<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Customer $customer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Customers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Parent Customers'), ['controller' => 'Customers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Parent Customer'), ['controller' => 'Customers', 'action' => 'add']) ?></li>
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
<div class="customers form large-9 medium-8 columns content">
    <?= $this->Form->create($customer) ?>
    <fieldset>
        <legend><?= __('Add Customer') ?></legend>
        <?php
            echo $this->Form->control('login_id');
            echo $this->Form->control('parent_id', ['options' => $parentCustomers]);
            echo $this->Form->control('zone_id', ['options' => $zones]);
            echo $this->Form->control('state_id', ['options' => $states]);
            echo $this->Form->control('district_id', ['options' => $districts]);
            echo $this->Form->control('title');
            echo $this->Form->control('fname');
            echo $this->Form->control('mname');
            echo $this->Form->control('lname');
            echo $this->Form->control('aadhar_card');
            echo $this->Form->control('pan_card');
            echo $this->Form->control('father_name');
            echo $this->Form->control('dob');
            echo $this->Form->control('gender');
            echo $this->Form->control('mobile_no');
            echo $this->Form->control('occupation');
            echo $this->Form->control('address');
            echo $this->Form->control('email');
            echo $this->Form->control('password');
            echo $this->Form->control('profile_picture');
            echo $this->Form->control('uuid');
            echo $this->Form->control('remarks');
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
