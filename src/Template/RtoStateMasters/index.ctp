<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RtoStateMaster[]|\Cake\Collection\CollectionInterface $rtoStateMasters
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Rto State Master'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="rtoStateMasters index large-9 medium-8 columns content">
    <h3><?= __('Rto State Masters') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('state_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('zone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rtoStateMasters as $rtoStateMaster): ?>
            <tr>
                <td><?= $this->Number->format($rtoStateMaster->id) ?></td>
                <td><?= h($rtoStateMaster->state_name) ?></td>
                <td><?= h($rtoStateMaster->zone) ?></td>
                <td><?= h($rtoStateMaster->created) ?></td>
                <td><?= h($rtoStateMaster->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $rtoStateMaster->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $rtoStateMaster->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $rtoStateMaster->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rtoStateMaster->id)]) ?>
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
