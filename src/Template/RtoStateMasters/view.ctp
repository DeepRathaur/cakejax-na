<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RtoStateMaster $rtoStateMaster
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Rto State Master'), ['action' => 'edit', $rtoStateMaster->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Rto State Master'), ['action' => 'delete', $rtoStateMaster->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rtoStateMaster->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Rto State Masters'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Rto State Master'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="rtoStateMasters view large-9 medium-8 columns content">
    <h3><?= h($rtoStateMaster->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('State Name') ?></th>
            <td><?= h($rtoStateMaster->state_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Zone') ?></th>
            <td><?= h($rtoStateMaster->zone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($rtoStateMaster->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($rtoStateMaster->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($rtoStateMaster->modified) ?></td>
        </tr>
    </table>
</div>
