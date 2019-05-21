<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Parent Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Parent User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
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
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->control('login_id');
            echo $this->Form->control('parent_id', ['options' => $parentUsers]);
            echo $this->Form->control('zone_id', ['options' => $zones]);
            echo $this->Form->control('state_id', ['options' => $states]);
            echo $this->Form->control('district_id', ['options' => $districts]);
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
            echo $this->Form->control('crop_commission');
            echo $this->Form->control('health_commission');
            echo $this->Form->control('motor_commission');
            echo $this->Form->control('reset_password_token');
            echo $this->Form->control('token_created_at');
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
