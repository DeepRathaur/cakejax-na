<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AdminDocument[]|\Cake\Collection\CollectionInterface $adminDocuments
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Admin Document'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="adminDocuments index large-9 medium-8 columns content">
    <h3><?= __('Admin Documents') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('admin_login_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('admin_documents') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($adminDocuments as $adminDocument): ?>
            <tr>
                <td><?= $this->Number->format($adminDocument->id) ?></td>
                <td><?= h($adminDocument->admin_login_id) ?></td>
                <td><?= h($adminDocument->admin_documents) ?></td>
                <td><?= h($adminDocument->created) ?></td>
                <td><?= h($adminDocument->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $adminDocument->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $adminDocument->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $adminDocument->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adminDocument->id)]) ?>
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
