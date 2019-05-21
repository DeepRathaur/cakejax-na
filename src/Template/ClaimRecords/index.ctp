<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ClaimRecord[]|\Cake\Collection\CollectionInterface $claimRecords
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Claim Record'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="claimRecords index large-9 medium-8 columns content">
    <h3><?= __('Claim Records') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('policy_no') ?></th>
                <th scope="col"><?= $this->Paginator->sort('message') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mobile_no') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($claimRecords as $claimRecord): ?>
            <tr>
                <td><?= $this->Number->format($claimRecord->id) ?></td>
                <td><?= h($claimRecord->policy_no) ?></td>
                <td><?= h($claimRecord->message) ?></td>
                <td><?= h($claimRecord->mobile_no) ?></td>
                <td><?= h($claimRecord->created) ?></td>
                <td><?= h($claimRecord->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $claimRecord->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $claimRecord->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $claimRecord->id], ['confirm' => __('Are you sure you want to delete # {0}?', $claimRecord->id)]) ?>
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
