<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CropMaster $cropMaster
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Crop Master'), ['action' => 'edit', $cropMaster->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Crop Master'), ['action' => 'delete', $cropMaster->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cropMaster->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Crop Masters'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Crop Master'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cropping Seasons'), ['controller' => 'CroppingSeasons', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cropping Season'), ['controller' => 'CroppingSeasons', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cropMasters view large-9 medium-8 columns content">
    <h3><?= h($cropMaster->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Cropping Season') ?></th>
            <td><?= $cropMaster->has('cropping_season') ? $this->Html->link($cropMaster->cropping_season->id, ['controller' => 'CroppingSeasons', 'action' => 'view', $cropMaster->cropping_season->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Crop Name') ?></th>
            <td><?= h($cropMaster->crop_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($cropMaster->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($cropMaster->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($cropMaster->modified) ?></td>
        </tr>
    </table>
</div>
