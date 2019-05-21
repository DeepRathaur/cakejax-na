<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CustomerLandHoldDetail $customerLandHoldDetail
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Customer Land Hold Detail'), ['action' => 'edit', $customerLandHoldDetail->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Customer Land Hold Detail'), ['action' => 'delete', $customerLandHoldDetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customerLandHoldDetail->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Customer Land Hold Details'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer Land Hold Detail'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List States'), ['controller' => 'States', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New State'), ['controller' => 'States', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Districts'), ['controller' => 'Districts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New District'), ['controller' => 'Districts', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="customerLandHoldDetails view large-9 medium-8 columns content">
    <h3><?= h($customerLandHoldDetail->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Customer') ?></th>
            <td><?= $customerLandHoldDetail->has('customer') ? $this->Html->link($customerLandHoldDetail->customer->title, ['controller' => 'Customers', 'action' => 'view', $customerLandHoldDetail->customer->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Login Id') ?></th>
            <td><?= h($customerLandHoldDetail->login_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Extentofland') ?></th>
            <td><?= h($customerLandHoldDetail->extentofland) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City') ?></th>
            <td><?= h($customerLandHoldDetail->city) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Block') ?></th>
            <td><?= h($customerLandHoldDetail->block) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('State') ?></th>
            <td><?= $customerLandHoldDetail->has('state') ? $this->Html->link($customerLandHoldDetail->state->id, ['controller' => 'States', 'action' => 'view', $customerLandHoldDetail->state->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('District') ?></th>
            <td><?= $customerLandHoldDetail->has('district') ? $this->Html->link($customerLandHoldDetail->district->id, ['controller' => 'Districts', 'action' => 'view', $customerLandHoldDetail->district->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Extentofland2') ?></th>
            <td><?= h($customerLandHoldDetail->extentofland2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City2') ?></th>
            <td><?= h($customerLandHoldDetail->city2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Block2') ?></th>
            <td><?= h($customerLandHoldDetail->block2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($customerLandHoldDetail->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Surveyno1') ?></th>
            <td><?= $this->Number->format($customerLandHoldDetail->surveyno1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Surveyno2') ?></th>
            <td><?= $this->Number->format($customerLandHoldDetail->surveyno2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pin Code') ?></th>
            <td><?= $this->Number->format($customerLandHoldDetail->pin_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('State Id2') ?></th>
            <td><?= $this->Number->format($customerLandHoldDetail->state_id2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('District Id2') ?></th>
            <td><?= $this->Number->format($customerLandHoldDetail->district_id2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pin Code2') ?></th>
            <td><?= $this->Number->format($customerLandHoldDetail->pin_code2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($customerLandHoldDetail->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($customerLandHoldDetail->modified) ?></td>
        </tr>
    </table>
</div>
