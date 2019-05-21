<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CropMaster $cropMaster
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $cropMaster->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $cropMaster->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Crop Masters'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Cropping Seasons'), ['controller' => 'CroppingSeasons', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cropping Season'), ['controller' => 'CroppingSeasons', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cropMasters form large-9 medium-8 columns content">
    <?= $this->Form->create($cropMaster) ?>
    <fieldset>
        <legend><?= __('Edit Crop Master') ?></legend>
        <?php
            echo $this->Form->control('season_id', ['options' => $croppingSeasons]);
            echo $this->Form->control('crop_name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
