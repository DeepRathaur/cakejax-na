<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AdminRole $adminRole
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $adminRole->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $adminRole->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Admin Roles'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Admins'), ['controller' => 'Admins', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Admin'), ['controller' => 'Admins', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="adminRoles form large-9 medium-8 columns content">
    <?= $this->Form->create($adminRole) ?>
    <fieldset>
        <legend><?= __('Edit Admin Role') ?></legend>
        <?php
            echo $this->Form->control('admin_id', ['options' => $admins]);
            echo $this->Form->control('role_id', ['options' => $roles]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
