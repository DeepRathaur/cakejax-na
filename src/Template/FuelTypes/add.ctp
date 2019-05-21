<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FuelType $fuelType
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Fuel Types'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="fuelTypes form large-9 medium-8 columns content">
    <?= $this->Form->create($fuelType) ?>
    <fieldset>
        <legend><?= __('Add Fuel Type') ?></legend>
        <?php
            echo $this->Form->control('fuel_type_desc');
            echo $this->Form->control('fuel_type_code');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
