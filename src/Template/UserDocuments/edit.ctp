<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserDocument $userDocument
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $userDocument->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $userDocument->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List User Documents'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="userDocuments form large-9 medium-8 columns content">
    <?= $this->Form->create($userDocument) ?>
    <fieldset>
        <legend><?= __('Edit User Document') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('user_documents');
            echo $this->Form->control('address_proof');
            echo $this->Form->control('id_proof');
            echo $this->Form->control('certificate');
            echo $this->Form->control('educational_certificate');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
