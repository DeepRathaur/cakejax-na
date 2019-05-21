<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AdminDocument $adminDocument
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Admin Documents'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="adminDocuments form large-9 medium-8 columns content">
    <?= $this->Form->create($adminDocument) ?>
    <fieldset>
        <legend><?= __('Add Admin Document') ?></legend>
        <?php
            echo $this->Form->control('admin_login_id');
            echo $this->Form->control('admin_documents');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
