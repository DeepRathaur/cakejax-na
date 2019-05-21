<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Scheme $scheme
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Scheme'), ['action' => 'edit', $scheme->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Scheme'), ['action' => 'delete', $scheme->id], ['confirm' => __('Are you sure you want to delete # {0}?', $scheme->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Schemes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Scheme'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Parent Schemes'), ['controller' => 'Schemes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Parent Scheme'), ['controller' => 'Schemes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Zones'), ['controller' => 'Zones', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Zone'), ['controller' => 'Zones', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List States'), ['controller' => 'States', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New State'), ['controller' => 'States', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Districts'), ['controller' => 'Districts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New District'), ['controller' => 'Districts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Child Schemes'), ['controller' => 'Schemes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Child Scheme'), ['controller' => 'Schemes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="schemes view large-9 medium-8 columns content">
    <h3><?= h($scheme->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Parent Scheme') ?></th>
            <td><?= $scheme->has('parent_scheme') ? $this->Html->link($scheme->parent_scheme->id, ['controller' => 'Schemes', 'action' => 'view', $scheme->parent_scheme->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Zone') ?></th>
            <td><?= $scheme->has('zone') ? $this->Html->link($scheme->zone->id, ['controller' => 'Zones', 'action' => 'view', $scheme->zone->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('State') ?></th>
            <td><?= $scheme->has('state') ? $this->Html->link($scheme->state->id, ['controller' => 'States', 'action' => 'view', $scheme->state->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('District') ?></th>
            <td><?= $scheme->has('district') ? $this->Html->link($scheme->district->id, ['controller' => 'Districts', 'action' => 'view', $scheme->district->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Scheme Name') ?></th>
            <td><?= h($scheme->scheme_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Insurance Type') ?></th>
            <td><?= h($scheme->insurance_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($scheme->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Commission') ?></th>
            <td><?= $this->Number->format($scheme->commission) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Target Amount') ?></th>
            <td><?= $this->Number->format($scheme->target_amount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date From') ?></th>
            <td><?= h($scheme->date_from) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date To') ?></th>
            <td><?= h($scheme->date_to) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($scheme->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($scheme->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $scheme->status ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Content') ?></h4>
        <?= $this->Text->autoParagraph(h($scheme->content)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Schemes') ?></h4>
        <?php if (!empty($scheme->child_schemes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Parent Id') ?></th>
                <th scope="col"><?= __('Zone Id') ?></th>
                <th scope="col"><?= __('State Id') ?></th>
                <th scope="col"><?= __('District Id') ?></th>
                <th scope="col"><?= __('Scheme Name') ?></th>
                <th scope="col"><?= __('Date From') ?></th>
                <th scope="col"><?= __('Date To') ?></th>
                <th scope="col"><?= __('Insurance Type') ?></th>
                <th scope="col"><?= __('Commission') ?></th>
                <th scope="col"><?= __('Target Amount') ?></th>
                <th scope="col"><?= __('Content') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($scheme->child_schemes as $childSchemes): ?>
            <tr>
                <td><?= h($childSchemes->id) ?></td>
                <td><?= h($childSchemes->parent_id) ?></td>
                <td><?= h($childSchemes->zone_id) ?></td>
                <td><?= h($childSchemes->state_id) ?></td>
                <td><?= h($childSchemes->district_id) ?></td>
                <td><?= h($childSchemes->scheme_name) ?></td>
                <td><?= h($childSchemes->date_from) ?></td>
                <td><?= h($childSchemes->date_to) ?></td>
                <td><?= h($childSchemes->insurance_type) ?></td>
                <td><?= h($childSchemes->commission) ?></td>
                <td><?= h($childSchemes->target_amount) ?></td>
                <td><?= h($childSchemes->content) ?></td>
                <td><?= h($childSchemes->status) ?></td>
                <td><?= h($childSchemes->created) ?></td>
                <td><?= h($childSchemes->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Schemes', 'action' => 'view', $childSchemes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Schemes', 'action' => 'edit', $childSchemes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Schemes', 'action' => 'delete', $childSchemes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $childSchemes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
