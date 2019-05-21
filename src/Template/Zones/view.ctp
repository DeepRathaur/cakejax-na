<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Zone $zone
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Zone'), ['action' => 'edit', $zone->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Zone'), ['action' => 'delete', $zone->id], ['confirm' => __('Are you sure you want to delete # {0}?', $zone->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Zones'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Zone'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Admins'), ['controller' => 'Admins', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Admin'), ['controller' => 'Admins', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Districts'), ['controller' => 'Districts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New District'), ['controller' => 'Districts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Schemes'), ['controller' => 'Schemes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Scheme'), ['controller' => 'Schemes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List States'), ['controller' => 'States', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New State'), ['controller' => 'States', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="zones view large-9 medium-8 columns content">
    <h3><?= h($zone->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Zone Name') ?></th>
            <td><?= h($zone->zone_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($zone->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($zone->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($zone->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Admins') ?></h4>
        <?php if (!empty($zone->admins)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Login Id') ?></th>
                <th scope="col"><?= __('Parent Id') ?></th>
                <th scope="col"><?= __('Role Id') ?></th>
                <th scope="col"><?= __('Zone Id') ?></th>
                <th scope="col"><?= __('State Id') ?></th>
                <th scope="col"><?= __('District Id') ?></th>
                <th scope="col"><?= __('Employee Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Aadhar Card') ?></th>
                <th scope="col"><?= __('Pan Card') ?></th>
                <th scope="col"><?= __('Father Name') ?></th>
                <th scope="col"><?= __('Dob') ?></th>
                <th scope="col"><?= __('Gender') ?></th>
                <th scope="col"><?= __('Mobile No') ?></th>
                <th scope="col"><?= __('Education') ?></th>
                <th scope="col"><?= __('Address') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Password') ?></th>
                <th scope="col"><?= __('Profile Picture') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($zone->admins as $admins): ?>
            <tr>
                <td><?= h($admins->id) ?></td>
                <td><?= h($admins->login_id) ?></td>
                <td><?= h($admins->parent_id) ?></td>
                <td><?= h($admins->role_id) ?></td>
                <td><?= h($admins->zone_id) ?></td>
                <td><?= h($admins->state_id) ?></td>
                <td><?= h($admins->district_id) ?></td>
                <td><?= h($admins->employee_id) ?></td>
                <td><?= h($admins->name) ?></td>
                <td><?= h($admins->aadhar_card) ?></td>
                <td><?= h($admins->pan_card) ?></td>
                <td><?= h($admins->father_name) ?></td>
                <td><?= h($admins->dob) ?></td>
                <td><?= h($admins->gender) ?></td>
                <td><?= h($admins->mobile_no) ?></td>
                <td><?= h($admins->education) ?></td>
                <td><?= h($admins->address) ?></td>
                <td><?= h($admins->email) ?></td>
                <td><?= h($admins->password) ?></td>
                <td><?= h($admins->profile_picture) ?></td>
                <td><?= h($admins->status) ?></td>
                <td><?= h($admins->created) ?></td>
                <td><?= h($admins->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Admins', 'action' => 'view', $admins->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Admins', 'action' => 'edit', $admins->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Admins', 'action' => 'delete', $admins->id], ['confirm' => __('Are you sure you want to delete # {0}?', $admins->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Customers') ?></h4>
        <?php if (!empty($zone->customers)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Login Id') ?></th>
                <th scope="col"><?= __('Parent Id') ?></th>
                <th scope="col"><?= __('Zone Id') ?></th>
                <th scope="col"><?= __('State Id') ?></th>
                <th scope="col"><?= __('District Id') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Fname') ?></th>
                <th scope="col"><?= __('Mname') ?></th>
                <th scope="col"><?= __('Lname') ?></th>
                <th scope="col"><?= __('Aadhar Card') ?></th>
                <th scope="col"><?= __('Pan Card') ?></th>
                <th scope="col"><?= __('Father Name') ?></th>
                <th scope="col"><?= __('Dob') ?></th>
                <th scope="col"><?= __('Gender') ?></th>
                <th scope="col"><?= __('Mobile No') ?></th>
                <th scope="col"><?= __('Occupation') ?></th>
                <th scope="col"><?= __('Address') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Password') ?></th>
                <th scope="col"><?= __('Profile Picture') ?></th>
                <th scope="col"><?= __('Uuid') ?></th>
                <th scope="col"><?= __('Remarks') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($zone->customers as $customers): ?>
            <tr>
                <td><?= h($customers->id) ?></td>
                <td><?= h($customers->login_id) ?></td>
                <td><?= h($customers->parent_id) ?></td>
                <td><?= h($customers->zone_id) ?></td>
                <td><?= h($customers->state_id) ?></td>
                <td><?= h($customers->district_id) ?></td>
                <td><?= h($customers->title) ?></td>
                <td><?= h($customers->fname) ?></td>
                <td><?= h($customers->mname) ?></td>
                <td><?= h($customers->lname) ?></td>
                <td><?= h($customers->aadhar_card) ?></td>
                <td><?= h($customers->pan_card) ?></td>
                <td><?= h($customers->father_name) ?></td>
                <td><?= h($customers->dob) ?></td>
                <td><?= h($customers->gender) ?></td>
                <td><?= h($customers->mobile_no) ?></td>
                <td><?= h($customers->occupation) ?></td>
                <td><?= h($customers->address) ?></td>
                <td><?= h($customers->email) ?></td>
                <td><?= h($customers->password) ?></td>
                <td><?= h($customers->profile_picture) ?></td>
                <td><?= h($customers->uuid) ?></td>
                <td><?= h($customers->remarks) ?></td>
                <td><?= h($customers->status) ?></td>
                <td><?= h($customers->created) ?></td>
                <td><?= h($customers->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Customers', 'action' => 'view', $customers->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Customers', 'action' => 'edit', $customers->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Customers', 'action' => 'delete', $customers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customers->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Districts') ?></h4>
        <?php if (!empty($zone->districts)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Zone Id') ?></th>
                <th scope="col"><?= __('State Id') ?></th>
                <th scope="col"><?= __('District Name') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($zone->districts as $districts): ?>
            <tr>
                <td><?= h($districts->id) ?></td>
                <td><?= h($districts->zone_id) ?></td>
                <td><?= h($districts->state_id) ?></td>
                <td><?= h($districts->district_name) ?></td>
                <td><?= h($districts->created) ?></td>
                <td><?= h($districts->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Districts', 'action' => 'view', $districts->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Districts', 'action' => 'edit', $districts->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Districts', 'action' => 'delete', $districts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $districts->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Schemes') ?></h4>
        <?php if (!empty($zone->schemes)): ?>
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
            <?php foreach ($zone->schemes as $schemes): ?>
            <tr>
                <td><?= h($schemes->id) ?></td>
                <td><?= h($schemes->parent_id) ?></td>
                <td><?= h($schemes->zone_id) ?></td>
                <td><?= h($schemes->state_id) ?></td>
                <td><?= h($schemes->district_id) ?></td>
                <td><?= h($schemes->scheme_name) ?></td>
                <td><?= h($schemes->date_from) ?></td>
                <td><?= h($schemes->date_to) ?></td>
                <td><?= h($schemes->insurance_type) ?></td>
                <td><?= h($schemes->commission) ?></td>
                <td><?= h($schemes->target_amount) ?></td>
                <td><?= h($schemes->content) ?></td>
                <td><?= h($schemes->status) ?></td>
                <td><?= h($schemes->created) ?></td>
                <td><?= h($schemes->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Schemes', 'action' => 'view', $schemes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Schemes', 'action' => 'edit', $schemes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Schemes', 'action' => 'delete', $schemes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $schemes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related States') ?></h4>
        <?php if (!empty($zone->states)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Zone Id') ?></th>
                <th scope="col"><?= __('State Name') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($zone->states as $states): ?>
            <tr>
                <td><?= h($states->id) ?></td>
                <td><?= h($states->zone_id) ?></td>
                <td><?= h($states->state_name) ?></td>
                <td><?= h($states->created) ?></td>
                <td><?= h($states->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'States', 'action' => 'view', $states->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'States', 'action' => 'edit', $states->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'States', 'action' => 'delete', $states->id], ['confirm' => __('Are you sure you want to delete # {0}?', $states->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Users') ?></h4>
        <?php if (!empty($zone->users)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Login Id') ?></th>
                <th scope="col"><?= __('Parent Id') ?></th>
                <th scope="col"><?= __('Zone Id') ?></th>
                <th scope="col"><?= __('State Id') ?></th>
                <th scope="col"><?= __('District Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Aadhar Card') ?></th>
                <th scope="col"><?= __('Pan Card') ?></th>
                <th scope="col"><?= __('Father Name') ?></th>
                <th scope="col"><?= __('Dob') ?></th>
                <th scope="col"><?= __('Gender') ?></th>
                <th scope="col"><?= __('Mobile No') ?></th>
                <th scope="col"><?= __('Education') ?></th>
                <th scope="col"><?= __('Address') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Password') ?></th>
                <th scope="col"><?= __('Profile Picture') ?></th>
                <th scope="col"><?= __('Crop Commission') ?></th>
                <th scope="col"><?= __('Health Commission') ?></th>
                <th scope="col"><?= __('Motor Commission') ?></th>
                <th scope="col"><?= __('Reset Password Token') ?></th>
                <th scope="col"><?= __('Token Created At') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($zone->users as $users): ?>
            <tr>
                <td><?= h($users->id) ?></td>
                <td><?= h($users->login_id) ?></td>
                <td><?= h($users->parent_id) ?></td>
                <td><?= h($users->zone_id) ?></td>
                <td><?= h($users->state_id) ?></td>
                <td><?= h($users->district_id) ?></td>
                <td><?= h($users->name) ?></td>
                <td><?= h($users->aadhar_card) ?></td>
                <td><?= h($users->pan_card) ?></td>
                <td><?= h($users->father_name) ?></td>
                <td><?= h($users->dob) ?></td>
                <td><?= h($users->gender) ?></td>
                <td><?= h($users->mobile_no) ?></td>
                <td><?= h($users->education) ?></td>
                <td><?= h($users->address) ?></td>
                <td><?= h($users->email) ?></td>
                <td><?= h($users->password) ?></td>
                <td><?= h($users->profile_picture) ?></td>
                <td><?= h($users->crop_commission) ?></td>
                <td><?= h($users->health_commission) ?></td>
                <td><?= h($users->motor_commission) ?></td>
                <td><?= h($users->reset_password_token) ?></td>
                <td><?= h($users->token_created_at) ?></td>
                <td><?= h($users->status) ?></td>
                <td><?= h($users->created) ?></td>
                <td><?= h($users->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
