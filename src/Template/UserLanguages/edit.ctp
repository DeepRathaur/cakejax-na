<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserLanguage $userLanguage
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $userLanguage->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $userLanguage->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List User Languages'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="userLanguages form large-9 medium-8 columns content">
    <?= $this->Form->create($userLanguage) ?>
    <fieldset>
        <legend><?= __('Edit User Language') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('language_id');
            echo $this->Form->control('proficiency_level');
            echo $this->Form->control('read');
            echo $this->Form->control('write');
            echo $this->Form->control('speak');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
