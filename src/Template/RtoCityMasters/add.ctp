<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RtoCityMaster $rtoCityMaster
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Rto City Masters'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List States'), ['controller' => 'States', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New State'), ['controller' => 'States', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="rtoCityMasters form large-9 medium-8 columns content">
    <?= $this->Form->create($rtoCityMaster) ?>
    <fieldset>
        <legend><?= __('Add Rto City Master') ?></legend>
        <?php
            echo $this->Form->control('city_name');
            echo $this->Form->control('state_id', ['options' => $states]);
            echo $this->Form->control('region_code');
            echo $this->Form->control('alias_region_code');
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
