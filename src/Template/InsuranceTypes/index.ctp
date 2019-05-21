<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\InsuranceType[]|\Cake\Collection\CollectionInterface $insuranceTypes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Insurance Type'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="insuranceTypes index large-9 medium-8 columns content">
    <h3><?= __('Insurance Types') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('insurance_type_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($insuranceTypes as $insuranceType): ?>
            <tr>
                <td><?= $this->Number->format($insuranceType->id) ?></td>
                <td><?= h($insuranceType->insurance_type_name) ?></td>
                <td><?= h($insuranceType->status) ?></td>
                <td><?= h($insuranceType->created) ?></td>
                <td><?= h($insuranceType->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $insuranceType->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $insuranceType->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $insuranceType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $insuranceType->id)]) ?>
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
