<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CustomerCropField $customerCropField
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Customer Crop Field'), ['action' => 'edit', $customerCropField->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Customer Crop Field'), ['action' => 'delete', $customerCropField->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customerCropField->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Customer Crop Fields'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer Crop Field'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="customerCropFields view large-9 medium-8 columns content">
    <h3><?= h($customerCropField->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Customer') ?></th>
            <td><?= $customerCropField->has('customer') ? $this->Html->link($customerCropField->customer->title, ['controller' => 'Customers', 'action' => 'view', $customerCropField->customer->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Login Id') ?></th>
            <td><?= h($customerCropField->login_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Farmer Classification') ?></th>
            <td><?= h($customerCropField->farmer_classification) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Identity Type') ?></th>
            <td><?= h($customerCropField->identity_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Identity No') ?></th>
            <td><?= h($customerCropField->identity_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Farmer Category') ?></th>
            <td><?= h($customerCropField->farmer_category) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Farmer Community') ?></th>
            <td><?= h($customerCropField->farmer_community) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($customerCropField->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($customerCropField->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($customerCropField->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Farmer Religion') ?></h4>
        <?= $this->Text->autoParagraph(h($customerCropField->farmer_religion)); ?>
    </div>
</div>
