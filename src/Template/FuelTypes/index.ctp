<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FuelType[]|\Cake\Collection\CollectionInterface $fuelTypes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Fuel Type'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="fuelTypes index large-9 medium-8 columns content">
    <h3><?= __('Fuel Types') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fuel_type_desc') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fuel_type_code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($fuelTypes as $fuelType): ?>
            <tr>
                <td><?= $this->Number->format($fuelType->id) ?></td>
                <td><?= h($fuelType->fuel_type_desc) ?></td>
                <td><?= h($fuelType->fuel_type_code) ?></td>
                <td><?= h($fuelType->created) ?></td>
                <td><?= h($fuelType->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $fuelType->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $fuelType->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $fuelType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fuelType->id)]) ?>
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
