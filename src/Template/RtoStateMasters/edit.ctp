<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RtoStateMaster $rtoStateMaster
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $rtoStateMaster->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $rtoStateMaster->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Rto State Masters'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="rtoStateMasters form large-9 medium-8 columns content">
    <?= $this->Form->create($rtoStateMaster) ?>
    <fieldset>
        <legend><?= __('Edit Rto State Master') ?></legend>
        <?php
            echo $this->Form->control('state_name');
            echo $this->Form->control('zone');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
