<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CropInsuranceOfflineCalculator[]|\Cake\Collection\CollectionInterface $cropInsuranceOfflineCalculators
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Crop Insurance Offline Calculator'), ['action' => 'add']) ?></li>
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
<div class="cropInsuranceOfflineCalculators index large-9 medium-8 columns content">
    <h3><?= __('Crop Insurance Offline Calculators') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('state_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('district_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('season_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('crop_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sum_insured_amount') ?></th>
                <th scope="col"><?= $this->Paginator->sort('insurance_company_amount') ?></th>
                <th scope="col"><?= $this->Paginator->sort('farmer_payable_amount') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cropInsuranceOfflineCalculators as $cropInsuranceOfflineCalculator): ?>
            <tr>
                <td><?= $this->Number->format($cropInsuranceOfflineCalculator->id) ?></td>
                <td><?= $cropInsuranceOfflineCalculator->has('state') ? $this->Html->link($cropInsuranceOfflineCalculator->state->id, ['controller' => 'States', 'action' => 'view', $cropInsuranceOfflineCalculator->state->id]) : '' ?></td>
                <td><?= $cropInsuranceOfflineCalculator->has('district') ? $this->Html->link($cropInsuranceOfflineCalculator->district->id, ['controller' => 'Districts', 'action' => 'view', $cropInsuranceOfflineCalculator->district->id]) : '' ?></td>
                <td><?= $cropInsuranceOfflineCalculator->has('cropping_season') ? $this->Html->link($cropInsuranceOfflineCalculator->cropping_season->id, ['controller' => 'CroppingSeasons', 'action' => 'view', $cropInsuranceOfflineCalculator->cropping_season->id]) : '' ?></td>
                <td><?= $cropInsuranceOfflineCalculator->has('crop_master') ? $this->Html->link($cropInsuranceOfflineCalculator->crop_master->id, ['controller' => 'CropMasters', 'action' => 'view', $cropInsuranceOfflineCalculator->crop_master->id]) : '' ?></td>
                <td><?= $this->Number->format($cropInsuranceOfflineCalculator->sum_insured_amount) ?></td>
                <td><?= $this->Number->format($cropInsuranceOfflineCalculator->insurance_company_amount) ?></td>
                <td><?= $this->Number->format($cropInsuranceOfflineCalculator->farmer_payable_amount) ?></td>
                <td><?= h($cropInsuranceOfflineCalculator->created) ?></td>
                <td><?= h($cropInsuranceOfflineCalculator->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $cropInsuranceOfflineCalculator->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cropInsuranceOfflineCalculator->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cropInsuranceOfflineCalculator->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cropInsuranceOfflineCalculator->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
