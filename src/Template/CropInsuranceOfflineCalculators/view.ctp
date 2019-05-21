<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CropInsuranceOfflineCalculator $cropInsuranceOfflineCalculator
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Crop Insurance Offline Calculator'), ['action' => 'edit', $cropInsuranceOfflineCalculator->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Crop Insurance Offline Calculator'), ['action' => 'delete', $cropInsuranceOfflineCalculator->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cropInsuranceOfflineCalculator->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Crop Insurance Offline Calculators'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Crop Insurance Offline Calculator'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List States'), ['controller' => 'States', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New State'), ['controller' => 'States', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Districts'), ['controller' => 'Districts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New District'), ['controller' => 'Districts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cropping Seasons'), ['controller' => 'CroppingSeasons', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cropping Season'), ['controller' => 'CroppingSeasons', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Crop Masters'), ['controller' => 'CropMasters', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Crop Master'), ['controller' => 'CropMasters', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cropInsuranceOfflineCalculators view large-9 medium-8 columns content">
    <h3><?= h($cropInsuranceOfflineCalculator->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('State') ?></th>
            <td><?= $cropInsuranceOfflineCalculator->has('state') ? $this->Html->link($cropInsuranceOfflineCalculator->state->id, ['controller' => 'States', 'action' => 'view', $cropInsuranceOfflineCalculator->state->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('District') ?></th>
            <td><?= $cropInsuranceOfflineCalculator->has('district') ? $this->Html->link($cropInsuranceOfflineCalculator->district->id, ['controller' => 'Districts', 'action' => 'view', $cropInsuranceOfflineCalculator->district->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cropping Season') ?></th>
            <td><?= $cropInsuranceOfflineCalculator->has('cropping_season') ? $this->Html->link($cropInsuranceOfflineCalculator->cropping_season->id, ['controller' => 'CroppingSeasons', 'action' => 'view', $cropInsuranceOfflineCalculator->cropping_season->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Crop Master') ?></th>
            <td><?= $cropInsuranceOfflineCalculator->has('crop_master') ? $this->Html->link($cropInsuranceOfflineCalculator->crop_master->id, ['controller' => 'CropMasters', 'action' => 'view', $cropInsuranceOfflineCalculator->crop_master->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($cropInsuranceOfflineCalculator->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sum Insured Amount') ?></th>
            <td><?= $this->Number->format($cropInsuranceOfflineCalculator->sum_insured_amount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Insurance Company Amount') ?></th>
            <td><?= $this->Number->format($cropInsuranceOfflineCalculator->insurance_company_amount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Farmer Payable Amount') ?></th>
            <td><?= $this->Number->format($cropInsuranceOfflineCalculator->farmer_payable_amount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($cropInsuranceOfflineCalculator->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($cropInsuranceOfflineCalculator->modified) ?></td>
        </tr>
    </table>
</div>
