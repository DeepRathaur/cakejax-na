<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CroppingSeason[]|\Cake\Collection\CollectionInterface $croppingSeasons
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Cropping Season'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="croppingSeasons index large-9 medium-8 columns content">
    <h3><?= __('Cropping Seasons') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('season_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($croppingSeasons as $croppingSeason): ?>
            <tr>
                <td><?= $this->Number->format($croppingSeason->id) ?></td>
                <td><?= h($croppingSeason->season_name) ?></td>
                <td><?= h($croppingSeason->created) ?></td>
                <td><?= h($croppingSeason->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $croppingSeason->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $croppingSeason->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $croppingSeason->id], ['confirm' => __('Are you sure you want to delete # {0}?', $croppingSeason->id)]) ?>
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
