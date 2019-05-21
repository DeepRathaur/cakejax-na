<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CropInsuranceOfflineCalculator $cropInsuranceOfflineCalculator
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $cropInsuranceOfflineCalculator->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $cropInsuranceOfflineCalculator->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Crop Insurance Offline Calculators'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List States'), ['controller' => 'States', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New State'), ['controller' => 'States', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Districts'), ['controller' => 'Districts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New District'), ['controller' => 'Districts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cropping Seasons'), ['controller' => 'CroppingSeasons', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cropping Season'), ['controller' => 'CroppingSeasons', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Crop Masters'), ['controller' => 'CropMasters', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Crop Master'), ['controller' => 'CropMasters', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cropInsuranceOfflineCalculators form large-9 medium-8 columns content">
    <?= $this->Form->create($cropInsuranceOfflineCalculator) ?>
    <fieldset>
        <legend><?= __('Edit Crop Insurance Offline Calculator') ?></legend>
        <?php
            echo $this->Form->control('state_id', ['options' => $states]);
            echo $this->Form->control('district_id', ['options' => $districts]);
            echo $this->Form->control('season_id', ['options' => $croppingSeasons]);
            echo $this->Form->control('crop_id', ['options' => $cropMasters]);
            echo $this->Form->control('sum_insured_amount');
            echo $this->Form->control('insurance_company_amount');
            echo $this->Form->control('farmer_payable_amount');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
