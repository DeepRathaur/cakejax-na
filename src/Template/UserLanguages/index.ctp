<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserLanguage[]|\Cake\Collection\CollectionInterface $userLanguages
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New User Language'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="userLanguages index large-9 medium-8 columns content">
    <h3><?= __('User Languages') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('language_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('proficiency_level') ?></th>
                <th scope="col"><?= $this->Paginator->sort('read') ?></th>
                <th scope="col"><?= $this->Paginator->sort('write') ?></th>
                <th scope="col"><?= $this->Paginator->sort('speak') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($userLanguages as $userLanguage): ?>
            <tr>
                <td><?= $this->Number->format($userLanguage->id) ?></td>
                <td><?= $userLanguage->has('user') ? $this->Html->link($userLanguage->user->name, ['controller' => 'Users', 'action' => 'view', $userLanguage->user->id]) : '' ?></td>
                <td><?= $this->Number->format($userLanguage->language_id) ?></td>
                <td><?= h($userLanguage->proficiency_level) ?></td>
                <td><?= h($userLanguage->read) ?></td>
                <td><?= h($userLanguage->write) ?></td>
                <td><?= h($userLanguage->speak) ?></td>
                <td><?= h($userLanguage->created) ?></td>
                <td><?= h($userLanguage->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $userLanguage->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $userLanguage->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $userLanguage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userLanguage->id)]) ?>
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
