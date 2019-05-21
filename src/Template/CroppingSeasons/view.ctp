<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CroppingSeason $croppingSeason
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cropping Season'), ['action' => 'edit', $croppingSeason->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cropping Season'), ['action' => 'delete', $croppingSeason->id], ['confirm' => __('Are you sure you want to delete # {0}?', $croppingSeason->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cropping Seasons'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cropping Season'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="croppingSeasons view large-9 medium-8 columns content">
    <h3><?= h($croppingSeason->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Season Name') ?></th>
            <td><?= h($croppingSeason->season_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($croppingSeason->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($croppingSeason->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($croppingSeason->modified) ?></td>
        </tr>
    </table>
</div>
