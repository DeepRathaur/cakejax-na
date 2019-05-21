<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ClaimRecord $claimRecord
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $claimRecord->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $claimRecord->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Claim Records'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="claimRecords form large-9 medium-8 columns content">
    <?= $this->Form->create($claimRecord) ?>
    <fieldset>
        <legend><?= __('Edit Claim Record') ?></legend>
        <?php
            echo $this->Form->control('policy_no');
            echo $this->Form->control('message');
            echo $this->Form->control('mobile_no');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
