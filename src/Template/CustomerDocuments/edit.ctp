<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CustomerDocument $customerDocument
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $customerDocument->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $customerDocument->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Customer Documents'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="customerDocuments form large-9 medium-8 columns content">
    <?= $this->Form->create($customerDocument) ?>
    <fieldset>
        <legend><?= __('Edit Customer Document') ?></legend>
        <?php
            echo $this->Form->control('customer_id', ['options' => $customers]);
            echo $this->Form->control('login_id');
            echo $this->Form->control('customer_documents');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
