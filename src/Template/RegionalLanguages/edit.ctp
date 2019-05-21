<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RegionalLanguage $regionalLanguage
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $regionalLanguage->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $regionalLanguage->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Regional Languages'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="regionalLanguages form large-9 medium-8 columns content">
    <?= $this->Form->create($regionalLanguage) ?>
    <fieldset>
        <legend><?= __('Edit Regional Language') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('state');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
