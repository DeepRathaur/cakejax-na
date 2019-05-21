<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\InsuranceType $insuranceType
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Insurance Type'), ['action' => 'edit', $insuranceType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Insurance Type'), ['action' => 'delete', $insuranceType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $insuranceType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Insurance Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Insurance Type'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="insuranceTypes view large-9 medium-8 columns content">
    <h3><?= h($insuranceType->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Insurance Type Name') ?></th>
            <td><?= h($insuranceType->insurance_type_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($insuranceType->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($insuranceType->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($insuranceType->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $insuranceType->status ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
