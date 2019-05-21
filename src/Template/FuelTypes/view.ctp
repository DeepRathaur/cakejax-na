<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FuelType $fuelType
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Fuel Type'), ['action' => 'edit', $fuelType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Fuel Type'), ['action' => 'delete', $fuelType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fuelType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Fuel Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fuel Type'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="fuelTypes view large-9 medium-8 columns content">
    <h3><?= h($fuelType->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Fuel Type Desc') ?></th>
            <td><?= h($fuelType->fuel_type_desc) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fuel Type Code') ?></th>
            <td><?= h($fuelType->fuel_type_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($fuelType->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($fuelType->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($fuelType->modified) ?></td>
        </tr>
    </table>
</div>
