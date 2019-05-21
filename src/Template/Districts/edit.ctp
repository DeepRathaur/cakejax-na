<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\District $district
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $district->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $district->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Districts'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Zones'), ['controller' => 'Zones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Zone'), ['controller' => 'Zones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List States'), ['controller' => 'States', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New State'), ['controller' => 'States', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Admins'), ['controller' => 'Admins', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Admin'), ['controller' => 'Admins', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Crop Insurance Offline Calculators'), ['controller' => 'CropInsuranceOfflineCalculators', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Crop Insurance Offline Calculator'), ['controller' => 'CropInsuranceOfflineCalculators', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Customer Contact Details'), ['controller' => 'CustomerContactDetails', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer Contact Detail'), ['controller' => 'CustomerContactDetails', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Customer Land Hold Details'), ['controller' => 'CustomerLandHoldDetails', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer Land Hold Detail'), ['controller' => 'CustomerLandHoldDetails', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Schemes'), ['controller' => 'Schemes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Scheme'), ['controller' => 'Schemes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="districts form large-9 medium-8 columns content">
    <?= $this->Form->create($district) ?>
    <fieldset>
        <legend><?= __('Edit District') ?></legend>
        <?php
            echo $this->Form->control('zone_id', ['options' => $zones]);
            echo $this->Form->control('state_id', ['options' => $states]);
            echo $this->Form->control('district_name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
