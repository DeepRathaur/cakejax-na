<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Customer $customer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Customer'), ['action' => 'edit', $customer->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Customer'), ['action' => 'delete', $customer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customer->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Customers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Parent Customers'), ['controller' => 'Customers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Parent Customer'), ['controller' => 'Customers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Zones'), ['controller' => 'Zones', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Zone'), ['controller' => 'Zones', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List States'), ['controller' => 'States', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New State'), ['controller' => 'States', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Districts'), ['controller' => 'Districts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New District'), ['controller' => 'Districts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customer Bank Details'), ['controller' => 'CustomerBankDetails', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer Bank Detail'), ['controller' => 'CustomerBankDetails', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customer Contact Details'), ['controller' => 'CustomerContactDetails', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer Contact Detail'), ['controller' => 'CustomerContactDetails', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customer Crop Fields'), ['controller' => 'CustomerCropFields', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer Crop Field'), ['controller' => 'CustomerCropFields', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customer Documents'), ['controller' => 'CustomerDocuments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer Document'), ['controller' => 'CustomerDocuments', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customer Insurance Types'), ['controller' => 'CustomerInsuranceTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer Insurance Type'), ['controller' => 'CustomerInsuranceTypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customer Land Hold Details'), ['controller' => 'CustomerLandHoldDetails', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer Land Hold Detail'), ['controller' => 'CustomerLandHoldDetails', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customer Nominee Details'), ['controller' => 'CustomerNomineeDetails', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer Nominee Detail'), ['controller' => 'CustomerNomineeDetails', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Child Customers'), ['controller' => 'Customers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Child Customer'), ['controller' => 'Customers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="customers view large-9 medium-8 columns content">
    <h3><?= h($customer->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Login Id') ?></th>
            <td><?= h($customer->login_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Parent Customer') ?></th>
            <td><?= $customer->has('parent_customer') ? $this->Html->link($customer->parent_customer->title, ['controller' => 'Customers', 'action' => 'view', $customer->parent_customer->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Zone') ?></th>
            <td><?= $customer->has('zone') ? $this->Html->link($customer->zone->id, ['controller' => 'Zones', 'action' => 'view', $customer->zone->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('State') ?></th>
            <td><?= $customer->has('state') ? $this->Html->link($customer->state->id, ['controller' => 'States', 'action' => 'view', $customer->state->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('District') ?></th>
            <td><?= $customer->has('district') ? $this->Html->link($customer->district->id, ['controller' => 'Districts', 'action' => 'view', $customer->district->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($customer->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fname') ?></th>
            <td><?= h($customer->fname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mname') ?></th>
            <td><?= h($customer->mname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lname') ?></th>
            <td><?= h($customer->lname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pan Card') ?></th>
            <td><?= h($customer->pan_card) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Father Name') ?></th>
            <td><?= h($customer->father_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dob') ?></th>
            <td><?= h($customer->dob) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gender') ?></th>
            <td><?= h($customer->gender) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mobile No') ?></th>
            <td><?= h($customer->mobile_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Occupation') ?></th>
            <td><?= h($customer->occupation) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($customer->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($customer->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Profile Picture') ?></th>
            <td><?= h($customer->profile_picture) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Uuid') ?></th>
            <td><?= h($customer->uuid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($customer->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Aadhar Card') ?></th>
            <td><?= $this->Number->format($customer->aadhar_card) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($customer->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($customer->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $customer->status ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Address') ?></h4>
        <?= $this->Text->autoParagraph(h($customer->address)); ?>
    </div>
    <div class="row">
        <h4><?= __('Remarks') ?></h4>
        <?= $this->Text->autoParagraph(h($customer->remarks)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Customer Bank Details') ?></h4>
        <?php if (!empty($customer->customer_bank_details)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Customer Id') ?></th>
                <th scope="col"><?= __('Login Id') ?></th>
                <th scope="col"><?= __('Account Holder Name') ?></th>
                <th scope="col"><?= __('Bank Name') ?></th>
                <th scope="col"><?= __('Branch Name') ?></th>
                <th scope="col"><?= __('Ifs Code') ?></th>
                <th scope="col"><?= __('Branch Address') ?></th>
                <th scope="col"><?= __('Account Type') ?></th>
                <th scope="col"><?= __('Account No') ?></th>
                <th scope="col"><?= __('Bank Phone No') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($customer->customer_bank_details as $customerBankDetails): ?>
            <tr>
                <td><?= h($customerBankDetails->id) ?></td>
                <td><?= h($customerBankDetails->customer_id) ?></td>
                <td><?= h($customerBankDetails->login_id) ?></td>
                <td><?= h($customerBankDetails->account_holder_name) ?></td>
                <td><?= h($customerBankDetails->bank_name) ?></td>
                <td><?= h($customerBankDetails->branch_name) ?></td>
                <td><?= h($customerBankDetails->ifs_code) ?></td>
                <td><?= h($customerBankDetails->branch_address) ?></td>
                <td><?= h($customerBankDetails->account_type) ?></td>
                <td><?= h($customerBankDetails->account_no) ?></td>
                <td><?= h($customerBankDetails->bank_phone_no) ?></td>
                <td><?= h($customerBankDetails->created) ?></td>
                <td><?= h($customerBankDetails->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'CustomerBankDetails', 'action' => 'view', $customerBankDetails->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'CustomerBankDetails', 'action' => 'edit', $customerBankDetails->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'CustomerBankDetails', 'action' => 'delete', $customerBankDetails->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customerBankDetails->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Customer Contact Details') ?></h4>
        <?php if (!empty($customer->customer_contact_details)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Customer Id') ?></th>
                <th scope="col"><?= __('Login Id') ?></th>
                <th scope="col"><?= __('Address1') ?></th>
                <th scope="col"><?= __('Address2') ?></th>
                <th scope="col"><?= __('Phone No') ?></th>
                <th scope="col"><?= __('Mobile No') ?></th>
                <th scope="col"><?= __('Post Office') ?></th>
                <th scope="col"><?= __('Fax No') ?></th>
                <th scope="col"><?= __('City') ?></th>
                <th scope="col"><?= __('State Id') ?></th>
                <th scope="col"><?= __('District Id') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Pin Code') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($customer->customer_contact_details as $customerContactDetails): ?>
            <tr>
                <td><?= h($customerContactDetails->id) ?></td>
                <td><?= h($customerContactDetails->customer_id) ?></td>
                <td><?= h($customerContactDetails->login_id) ?></td>
                <td><?= h($customerContactDetails->address1) ?></td>
                <td><?= h($customerContactDetails->address2) ?></td>
                <td><?= h($customerContactDetails->phone_no) ?></td>
                <td><?= h($customerContactDetails->mobile_no) ?></td>
                <td><?= h($customerContactDetails->post_office) ?></td>
                <td><?= h($customerContactDetails->fax_no) ?></td>
                <td><?= h($customerContactDetails->city) ?></td>
                <td><?= h($customerContactDetails->state_id) ?></td>
                <td><?= h($customerContactDetails->district_id) ?></td>
                <td><?= h($customerContactDetails->email) ?></td>
                <td><?= h($customerContactDetails->pin_code) ?></td>
                <td><?= h($customerContactDetails->created) ?></td>
                <td><?= h($customerContactDetails->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'CustomerContactDetails', 'action' => 'view', $customerContactDetails->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'CustomerContactDetails', 'action' => 'edit', $customerContactDetails->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'CustomerContactDetails', 'action' => 'delete', $customerContactDetails->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customerContactDetails->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Customer Crop Fields') ?></h4>
        <?php if (!empty($customer->customer_crop_fields)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Customer Id') ?></th>
                <th scope="col"><?= __('Login Id') ?></th>
                <th scope="col"><?= __('Farmer Classification') ?></th>
                <th scope="col"><?= __('Identity Type') ?></th>
                <th scope="col"><?= __('Identity No') ?></th>
                <th scope="col"><?= __('Farmer Category') ?></th>
                <th scope="col"><?= __('Farmer Religion') ?></th>
                <th scope="col"><?= __('Farmer Community') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($customer->customer_crop_fields as $customerCropFields): ?>
            <tr>
                <td><?= h($customerCropFields->id) ?></td>
                <td><?= h($customerCropFields->customer_id) ?></td>
                <td><?= h($customerCropFields->login_id) ?></td>
                <td><?= h($customerCropFields->farmer_classification) ?></td>
                <td><?= h($customerCropFields->identity_type) ?></td>
                <td><?= h($customerCropFields->identity_no) ?></td>
                <td><?= h($customerCropFields->farmer_category) ?></td>
                <td><?= h($customerCropFields->farmer_religion) ?></td>
                <td><?= h($customerCropFields->farmer_community) ?></td>
                <td><?= h($customerCropFields->created) ?></td>
                <td><?= h($customerCropFields->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'CustomerCropFields', 'action' => 'view', $customerCropFields->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'CustomerCropFields', 'action' => 'edit', $customerCropFields->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'CustomerCropFields', 'action' => 'delete', $customerCropFields->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customerCropFields->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Customer Documents') ?></h4>
        <?php if (!empty($customer->customer_documents)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Customer Id') ?></th>
                <th scope="col"><?= __('Login Id') ?></th>
                <th scope="col"><?= __('Customer Documents') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($customer->customer_documents as $customerDocuments): ?>
            <tr>
                <td><?= h($customerDocuments->id) ?></td>
                <td><?= h($customerDocuments->customer_id) ?></td>
                <td><?= h($customerDocuments->login_id) ?></td>
                <td><?= h($customerDocuments->customer_documents) ?></td>
                <td><?= h($customerDocuments->created) ?></td>
                <td><?= h($customerDocuments->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'CustomerDocuments', 'action' => 'view', $customerDocuments->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'CustomerDocuments', 'action' => 'edit', $customerDocuments->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'CustomerDocuments', 'action' => 'delete', $customerDocuments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customerDocuments->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Customer Insurance Types') ?></h4>
        <?php if (!empty($customer->customer_insurance_types)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Customer Id') ?></th>
                <th scope="col"><?= __('Login Id') ?></th>
                <th scope="col"><?= __('Insurance Type Name') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($customer->customer_insurance_types as $customerInsuranceTypes): ?>
            <tr>
                <td><?= h($customerInsuranceTypes->id) ?></td>
                <td><?= h($customerInsuranceTypes->customer_id) ?></td>
                <td><?= h($customerInsuranceTypes->login_id) ?></td>
                <td><?= h($customerInsuranceTypes->insurance_type_name) ?></td>
                <td><?= h($customerInsuranceTypes->status) ?></td>
                <td><?= h($customerInsuranceTypes->created) ?></td>
                <td><?= h($customerInsuranceTypes->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'CustomerInsuranceTypes', 'action' => 'view', $customerInsuranceTypes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'CustomerInsuranceTypes', 'action' => 'edit', $customerInsuranceTypes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'CustomerInsuranceTypes', 'action' => 'delete', $customerInsuranceTypes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customerInsuranceTypes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Customer Land Hold Details') ?></h4>
        <?php if (!empty($customer->customer_land_hold_details)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Customer Id') ?></th>
                <th scope="col"><?= __('Login Id') ?></th>
                <th scope="col"><?= __('Surveyno1') ?></th>
                <th scope="col"><?= __('Surveyno2') ?></th>
                <th scope="col"><?= __('Extentofland') ?></th>
                <th scope="col"><?= __('City') ?></th>
                <th scope="col"><?= __('Block') ?></th>
                <th scope="col"><?= __('State Id') ?></th>
                <th scope="col"><?= __('District Id') ?></th>
                <th scope="col"><?= __('Pin Code') ?></th>
                <th scope="col"><?= __('Extentofland2') ?></th>
                <th scope="col"><?= __('City2') ?></th>
                <th scope="col"><?= __('Block2') ?></th>
                <th scope="col"><?= __('State Id2') ?></th>
                <th scope="col"><?= __('District Id2') ?></th>
                <th scope="col"><?= __('Pin Code2') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($customer->customer_land_hold_details as $customerLandHoldDetails): ?>
            <tr>
                <td><?= h($customerLandHoldDetails->id) ?></td>
                <td><?= h($customerLandHoldDetails->customer_id) ?></td>
                <td><?= h($customerLandHoldDetails->login_id) ?></td>
                <td><?= h($customerLandHoldDetails->surveyno1) ?></td>
                <td><?= h($customerLandHoldDetails->surveyno2) ?></td>
                <td><?= h($customerLandHoldDetails->extentofland) ?></td>
                <td><?= h($customerLandHoldDetails->city) ?></td>
                <td><?= h($customerLandHoldDetails->block) ?></td>
                <td><?= h($customerLandHoldDetails->state_id) ?></td>
                <td><?= h($customerLandHoldDetails->district_id) ?></td>
                <td><?= h($customerLandHoldDetails->pin_code) ?></td>
                <td><?= h($customerLandHoldDetails->extentofland2) ?></td>
                <td><?= h($customerLandHoldDetails->city2) ?></td>
                <td><?= h($customerLandHoldDetails->block2) ?></td>
                <td><?= h($customerLandHoldDetails->state_id2) ?></td>
                <td><?= h($customerLandHoldDetails->district_id2) ?></td>
                <td><?= h($customerLandHoldDetails->pin_code2) ?></td>
                <td><?= h($customerLandHoldDetails->created) ?></td>
                <td><?= h($customerLandHoldDetails->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'CustomerLandHoldDetails', 'action' => 'view', $customerLandHoldDetails->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'CustomerLandHoldDetails', 'action' => 'edit', $customerLandHoldDetails->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'CustomerLandHoldDetails', 'action' => 'delete', $customerLandHoldDetails->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customerLandHoldDetails->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Customer Nominee Details') ?></h4>
        <?php if (!empty($customer->customer_nominee_details)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Customer Id') ?></th>
                <th scope="col"><?= __('Login Id') ?></th>
                <th scope="col"><?= __('Nominee Title') ?></th>
                <th scope="col"><?= __('Nominee Fname') ?></th>
                <th scope="col"><?= __('Nominee Mname') ?></th>
                <th scope="col"><?= __('Nominee Lname') ?></th>
                <th scope="col"><?= __('Relation') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($customer->customer_nominee_details as $customerNomineeDetails): ?>
            <tr>
                <td><?= h($customerNomineeDetails->id) ?></td>
                <td><?= h($customerNomineeDetails->customer_id) ?></td>
                <td><?= h($customerNomineeDetails->login_id) ?></td>
                <td><?= h($customerNomineeDetails->nominee_title) ?></td>
                <td><?= h($customerNomineeDetails->nominee_fname) ?></td>
                <td><?= h($customerNomineeDetails->nominee_mname) ?></td>
                <td><?= h($customerNomineeDetails->nominee_lname) ?></td>
                <td><?= h($customerNomineeDetails->relation) ?></td>
                <td><?= h($customerNomineeDetails->created) ?></td>
                <td><?= h($customerNomineeDetails->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'CustomerNomineeDetails', 'action' => 'view', $customerNomineeDetails->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'CustomerNomineeDetails', 'action' => 'edit', $customerNomineeDetails->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'CustomerNomineeDetails', 'action' => 'delete', $customerNomineeDetails->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customerNomineeDetails->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Customers') ?></h4>
        <?php if (!empty($customer->child_customers)): ?>
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
            <?php foreach ($customer->child_customers as $childCustomers): ?>
            <tr>
                <td><?= h($childCustomers->id) ?></td>
                <td><?= h($childCustomers->login_id) ?></td>
                <td><?= h($childCustomers->parent_id) ?></td>
                <td><?= h($childCustomers->zone_id) ?></td>
                <td><?= h($childCustomers->state_id) ?></td>
                <td><?= h($childCustomers->district_id) ?></td>
                <td><?= h($childCustomers->title) ?></td>
                <td><?= h($childCustomers->fname) ?></td>
                <td><?= h($childCustomers->mname) ?></td>
                <td><?= h($childCustomers->lname) ?></td>
                <td><?= h($childCustomers->aadhar_card) ?></td>
                <td><?= h($childCustomers->pan_card) ?></td>
                <td><?= h($childCustomers->father_name) ?></td>
                <td><?= h($childCustomers->dob) ?></td>
                <td><?= h($childCustomers->gender) ?></td>
                <td><?= h($childCustomers->mobile_no) ?></td>
                <td><?= h($childCustomers->occupation) ?></td>
                <td><?= h($childCustomers->address) ?></td>
                <td><?= h($childCustomers->email) ?></td>
                <td><?= h($childCustomers->password) ?></td>
                <td><?= h($childCustomers->profile_picture) ?></td>
                <td><?= h($childCustomers->uuid) ?></td>
                <td><?= h($childCustomers->remarks) ?></td>
                <td><?= h($childCustomers->status) ?></td>
                <td><?= h($childCustomers->created) ?></td>
                <td><?= h($childCustomers->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Customers', 'action' => 'view', $childCustomers->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Customers', 'action' => 'edit', $childCustomers->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Customers', 'action' => 'delete', $childCustomers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $childCustomers->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
