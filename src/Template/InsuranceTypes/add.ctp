<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\InsuranceType $insuranceType
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Insurance Types'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="insuranceTypes form large-9 medium-8 columns content">
    <?= $this->Form->create($insuranceType) ?>
    <fieldset>
        <legend><?= __('Add Insurance Type') ?></legend>
        <?php
            echo $this->Form->control('insurance_type_name');
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
