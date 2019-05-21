<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Zones'), ['controller' => 'Zones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Zone'), ['controller' => 'Zones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List States'), ['controller' => 'States', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New State'), ['controller' => 'States', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Districts'), ['controller' => 'Districts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New District'), ['controller' => 'Districts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List User Documents'), ['controller' => 'UserDocuments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User Document'), ['controller' => 'UserDocuments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List User Languages'), ['controller' => 'UserLanguages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User Language'), ['controller' => 'UserLanguages', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users index large-9 medium-8 columns content">
    <h3><?= __('Users') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('login_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('parent_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('zone_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('state_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('district_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('aadhar_card') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pan_card') ?></th>
                <th scope="col"><?= $this->Paginator->sort('father_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dob') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gender') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mobile_no') ?></th>
                <th scope="col"><?= $this->Paginator->sort('education') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                <th scope="col"><?= $this->Paginator->sort('profile_picture') ?></th>
                <th scope="col"><?= $this->Paginator->sort('crop_commission') ?></th>
                <th scope="col"><?= $this->Paginator->sort('health_commission') ?></th>
                <th scope="col"><?= $this->Paginator->sort('motor_commission') ?></th>
                <th scope="col"><?= $this->Paginator->sort('reset_password_token') ?></th>
                <th scope="col"><?= $this->Paginator->sort('token_created_at') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->id) ?></td>
                <td><?= h($user->login_id) ?></td>
                <td><?= $user->has('parent_user') ? $this->Html->link($user->parent_user->name, ['controller' => 'Users', 'action' => 'view', $user->parent_user->id]) : '' ?></td>
                <td><?= $user->has('zone') ? $this->Html->link($user->zone->id, ['controller' => 'Zones', 'action' => 'view', $user->zone->id]) : '' ?></td>
                <td><?= $user->has('state') ? $this->Html->link($user->state->id, ['controller' => 'States', 'action' => 'view', $user->state->id]) : '' ?></td>
                <td><?= $user->has('district') ? $this->Html->link($user->district->id, ['controller' => 'Districts', 'action' => 'view', $user->district->id]) : '' ?></td>
                <td><?= h($user->name) ?></td>
                <td><?= $this->Number->format($user->aadhar_card) ?></td>
                <td><?= h($user->pan_card) ?></td>
                <td><?= h($user->father_name) ?></td>
                <td><?= h($user->dob) ?></td>
                <td><?= h($user->gender) ?></td>
                <td><?= h($user->mobile_no) ?></td>
                <td><?= h($user->education) ?></td>
                <td><?= h($user->email) ?></td>
                <td><?= h($user->password) ?></td>
                <td><?= h($user->profile_picture) ?></td>
                <td><?= $this->Number->format($user->crop_commission) ?></td>
                <td><?= $this->Number->format($user->health_commission) ?></td>
                <td><?= $this->Number->format($user->motor_commission) ?></td>
                <td><?= h($user->reset_password_token) ?></td>
                <td><?= h($user->token_created_at) ?></td>
                <td><?= h($user->status) ?></td>
                <td><?= h($user->created) ?></td>
                <td><?= h($user->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
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
