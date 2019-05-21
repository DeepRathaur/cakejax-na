<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Admin $admin
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Admins'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Parent Admins'), ['controller' => 'Admins', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Parent Admin'), ['controller' => 'Admins', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Zones'), ['controller' => 'Zones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Zone'), ['controller' => 'Zones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List States'), ['controller' => 'States', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New State'), ['controller' => 'States', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Districts'), ['controller' => 'Districts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New District'), ['controller' => 'Districts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Admin Roles'), ['controller' => 'AdminRoles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Admin Role'), ['controller' => 'AdminRoles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="admins form large-9 medium-8 columns content">
    <?= $this->Form->create($admin) ?>
    <fieldset>
        <legend><?= __('Add Admin') ?></legend>
        <?php
            echo $this->Form->control('login_id');
            echo $this->Form->control('parent_id', ['options' => $parentAdmins]);
            echo $this->Form->control('role_id', ['options' => $roles]);
            echo $this->Form->control('zone_id', ['options' => $zones]);
            echo $this->Form->control('state_id', ['options' => $states]);
            echo $this->Form->control('district_id', ['options' => $districts]);
            echo $this->Form->control('employee_id');
            echo $this->Form->control('name');
            echo $this->Form->control('aadhar_card');
            echo $this->Form->control('pan_card');
            echo $this->Form->control('father_name');
            echo $this->Form->control('dob');
            echo $this->Form->control('gender');
            echo $this->Form->control('mobile_no');
            echo $this->Form->control('education');
            echo $this->Form->control('address');
            echo $this->Form->control('email');
            echo $this->Form->control('password');
            echo $this->Form->control('profile_picture');
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
