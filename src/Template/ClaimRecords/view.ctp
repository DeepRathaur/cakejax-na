<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ClaimRecord $claimRecord
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Claim Record'), ['action' => 'edit', $claimRecord->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Claim Record'), ['action' => 'delete', $claimRecord->id], ['confirm' => __('Are you sure you want to delete # {0}?', $claimRecord->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Claim Records'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Claim Record'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="claimRecords view large-9 medium-8 columns content">
    <h3><?= h($claimRecord->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Policy No') ?></th>
            <td><?= h($claimRecord->policy_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Message') ?></th>
            <td><?= h($claimRecord->message) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mobile No') ?></th>
            <td><?= h($claimRecord->mobile_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($claimRecord->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($claimRecord->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($claimRecord->modified) ?></td>
        </tr>
    </table>
</div>
