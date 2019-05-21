<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CustomerContactDetail $customerContactDetail
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $customerContactDetail->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $customerContactDetail->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Customer Contact Details'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List States'), ['controller' => 'States', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New State'), ['controller' => 'States', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Districts'), ['controller' => 'Districts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New District'), ['controller' => 'Districts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="customerContactDetails form large-9 medium-8 columns content">
    <?= $this->Form->create($customerContactDetail) ?>
    <fieldset>
        <legend><?= __('Edit Customer Contact Detail') ?></legend>
        <?php
            echo $this->Form->control('customer_id', ['options' => $customers]);
            echo $this->Form->control('login_id');
            echo $this->Form->control('address1');
            echo $this->Form->control('address2');
            echo $this->Form->control('phone_no');
            echo $this->Form->control('mobile_no');
            echo $this->Form->control('post_office');
            echo $this->Form->control('fax_no');
            echo $this->Form->control('city');
            echo $this->Form->control('state_id', ['options' => $states]);
            echo $this->Form->control('district_id', ['options' => $districts]);
            echo $this->Form->control('email');
            echo $this->Form->control('pin_code');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
