<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CropMaster[]|\Cake\Collection\CollectionInterface $cropMasters
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Crop Master'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cropping Seasons'), ['controller' => 'CroppingSeasons', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cropping Season'), ['controller' => 'CroppingSeasons', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cropMasters index large-9 medium-8 columns content">
    <h3><?= __('Crop Masters') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('season_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('crop_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cropMasters as $cropMaster): ?>
            <tr>
                <td><?= $this->Number->format($cropMaster->id) ?></td>
                <td><?= $cropMaster->has('cropping_season') ? $this->Html->link($cropMaster->cropping_season->id, ['controller' => 'CroppingSeasons', 'action' => 'view', $cropMaster->cropping_season->id]) : '' ?></td>
                <td><?= h($cropMaster->crop_name) ?></td>
                <td><?= h($cropMaster->created) ?></td>
                <td><?= h($cropMaster->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $cropMaster->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cropMaster->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cropMaster->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cropMaster->id)]) ?>
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
