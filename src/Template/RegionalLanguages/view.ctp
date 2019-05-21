<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RegionalLanguage $regionalLanguage
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Regional Language'), ['action' => 'edit', $regionalLanguage->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Regional Language'), ['action' => 'delete', $regionalLanguage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $regionalLanguage->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Regional Languages'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Regional Language'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="regionalLanguages view large-9 medium-8 columns content">
    <h3><?= h($regionalLanguage->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($regionalLanguage->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('State') ?></th>
            <td><?= h($regionalLanguage->state) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($regionalLanguage->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($regionalLanguage->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($regionalLanguage->modified) ?></td>
        </tr>
    </table>
</div>
