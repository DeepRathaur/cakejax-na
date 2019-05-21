<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CroppingSeason $croppingSeason
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Cropping Seasons'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="croppingSeasons form large-9 medium-8 columns content">
    <?= $this->Form->create($croppingSeason) ?>
    <fieldset>
        <legend><?= __('Add Cropping Season') ?></legend>
        <?php
            echo $this->Form->control('season_name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
