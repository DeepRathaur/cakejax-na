<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Parent Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Parent User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Zones'), ['controller' => 'Zones', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Zone'), ['controller' => 'Zones', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List States'), ['controller' => 'States', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New State'), ['controller' => 'States', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Districts'), ['controller' => 'Districts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New District'), ['controller' => 'Districts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List User Documents'), ['controller' => 'UserDocuments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Document'), ['controller' => 'UserDocuments', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List User Languages'), ['controller' => 'UserLanguages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Language'), ['controller' => 'UserLanguages', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Child Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Child User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Login Id') ?></th>
            <td><?= h($user->login_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Parent User') ?></th>
            <td><?= $user->has('parent_user') ? $this->Html->link($user->parent_user->name, ['controller' => 'Users', 'action' => 'view', $user->parent_user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Zone') ?></th>
            <td><?= $user->has('zone') ? $this->Html->link($user->zone->id, ['controller' => 'Zones', 'action' => 'view', $user->zone->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('State') ?></th>
            <td><?= $user->has('state') ? $this->Html->link($user->state->id, ['controller' => 'States', 'action' => 'view', $user->state->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('District') ?></th>
            <td><?= $user->has('district') ? $this->Html->link($user->district->id, ['controller' => 'Districts', 'action' => 'view', $user->district->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($user->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pan Card') ?></th>
            <td><?= h($user->pan_card) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Father Name') ?></th>
            <td><?= h($user->father_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dob') ?></th>
            <td><?= h($user->dob) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gender') ?></th>
            <td><?= h($user->gender) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mobile No') ?></th>
            <td><?= h($user->mobile_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Education') ?></th>
            <td><?= h($user->education) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Profile Picture') ?></th>
            <td><?= h($user->profile_picture) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Reset Password Token') ?></th>
            <td><?= h($user->reset_password_token) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Aadhar Card') ?></th>
            <td><?= $this->Number->format($user->aadhar_card) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Crop Commission') ?></th>
            <td><?= $this->Number->format($user->crop_commission) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Health Commission') ?></th>
            <td><?= $this->Number->format($user->health_commission) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Motor Commission') ?></th>
            <td><?= $this->Number->format($user->motor_commission) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Token Created At') ?></th>
            <td><?= h($user->token_created_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $user->status ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Address') ?></h4>
        <?= $this->Text->autoParagraph(h($user->address)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related User Documents') ?></h4>
        <?php if (!empty($user->user_documents)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('User Documents') ?></th>
                <th scope="col"><?= __('Address Proof') ?></th>
                <th scope="col"><?= __('Id Proof') ?></th>
                <th scope="col"><?= __('Certificate') ?></th>
                <th scope="col"><?= __('Educational Certificate') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->user_documents as $userDocuments): ?>
            <tr>
                <td><?= h($userDocuments->id) ?></td>
                <td><?= h($userDocuments->user_id) ?></td>
                <td><?= h($userDocuments->user_documents) ?></td>
                <td><?= h($userDocuments->address_proof) ?></td>
                <td><?= h($userDocuments->id_proof) ?></td>
                <td><?= h($userDocuments->certificate) ?></td>
                <td><?= h($userDocuments->educational_certificate) ?></td>
                <td><?= h($userDocuments->created) ?></td>
                <td><?= h($userDocuments->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'UserDocuments', 'action' => 'view', $userDocuments->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'UserDocuments', 'action' => 'edit', $userDocuments->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'UserDocuments', 'action' => 'delete', $userDocuments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userDocuments->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related User Languages') ?></h4>
        <?php if (!empty($user->user_languages)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Language Id') ?></th>
                <th scope="col"><?= __('Proficiency Level') ?></th>
                <th scope="col"><?= __('Read') ?></th>
                <th scope="col"><?= __('Write') ?></th>
                <th scope="col"><?= __('Speak') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->user_languages as $userLanguages): ?>
            <tr>
                <td><?= h($userLanguages->id) ?></td>
                <td><?= h($userLanguages->user_id) ?></td>
                <td><?= h($userLanguages->language_id) ?></td>
                <td><?= h($userLanguages->proficiency_level) ?></td>
                <td><?= h($userLanguages->read) ?></td>
                <td><?= h($userLanguages->write) ?></td>
                <td><?= h($userLanguages->speak) ?></td>
                <td><?= h($userLanguages->created) ?></td>
                <td><?= h($userLanguages->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'UserLanguages', 'action' => 'view', $userLanguages->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'UserLanguages', 'action' => 'edit', $userLanguages->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'UserLanguages', 'action' => 'delete', $userLanguages->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userLanguages->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Users') ?></h4>
        <?php if (!empty($user->child_users)): ?>
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
            <?php foreach ($user->child_users as $childUsers): ?>
            <tr>
                <td><?= h($childUsers->id) ?></td>
                <td><?= h($childUsers->login_id) ?></td>
                <td><?= h($childUsers->parent_id) ?></td>
                <td><?= h($childUsers->zone_id) ?></td>
                <td><?= h($childUsers->state_id) ?></td>
                <td><?= h($childUsers->district_id) ?></td>
                <td><?= h($childUsers->name) ?></td>
                <td><?= h($childUsers->aadhar_card) ?></td>
                <td><?= h($childUsers->pan_card) ?></td>
                <td><?= h($childUsers->father_name) ?></td>
                <td><?= h($childUsers->dob) ?></td>
                <td><?= h($childUsers->gender) ?></td>
                <td><?= h($childUsers->mobile_no) ?></td>
                <td><?= h($childUsers->education) ?></td>
                <td><?= h($childUsers->address) ?></td>
                <td><?= h($childUsers->email) ?></td>
                <td><?= h($childUsers->password) ?></td>
                <td><?= h($childUsers->profile_picture) ?></td>
                <td><?= h($childUsers->crop_commission) ?></td>
                <td><?= h($childUsers->health_commission) ?></td>
                <td><?= h($childUsers->motor_commission) ?></td>
                <td><?= h($childUsers->reset_password_token) ?></td>
                <td><?= h($childUsers->token_created_at) ?></td>
                <td><?= h($childUsers->status) ?></td>
                <td><?= h($childUsers->created) ?></td>
                <td><?= h($childUsers->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $childUsers->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $childUsers->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $childUsers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $childUsers->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
