<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CustomerVhicleDetail[]|\Cake\Collection\CollectionInterface $customerVhicleDetails
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Customer Vhicle Detail'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="customerVhicleDetails index large-9 medium-8 columns content">
    <h3><?= __('Customer Vhicle Details') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('policyno') ?></th>
                <th scope="col"><?= $this->Paginator->sort('customer_emailid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('product_code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('product_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('vhicle_registration_no') ?></th>
                <th scope="col"><?= $this->Paginator->sort('car_state_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('car_city_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('car_state_code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('car_city_code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('car_pin_code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('vhicle_engine_no') ?></th>
                <th scope="col"><?= $this->Paginator->sort('vhicle_chassis_no') ?></th>
                <th scope="col"><?= $this->Paginator->sort('body_color') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fuel_type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('vhicle_class') ?></th>
                <th scope="col"><?= $this->Paginator->sort('VehicleMake') ?></th>
                <th scope="col"><?= $this->Paginator->sort('VehicleClassCode') ?></th>
                <th scope="col"><?= $this->Paginator->sort('VehicleMakeCode') ?></th>
                <th scope="col"><?= $this->Paginator->sort('VehicleModelCode') ?></th>
                <th scope="col"><?= $this->Paginator->sort('BodyTypeCode') ?></th>
                <th scope="col"><?= $this->Paginator->sort('noofwheels') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cubiccapacity') ?></th>
                <th scope="col"><?= $this->Paginator->sort('seatingcapacity') ?></th>
                <th scope="col"><?= $this->Paginator->sort('registrationzone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('GrossVehicleWeight') ?></th>
                <th scope="col"><?= $this->Paginator->sort('CarryingCapacity') ?></th>
                <th scope="col"><?= $this->Paginator->sort('VehicleType') ?></th>
                <th scope="col"><?= $this->Paginator->sort('vehicle_model_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('VehicleExShowroomPrice') ?></th>
                <th scope="col"><?= $this->Paginator->sort('DateOfFirstRegistration') ?></th>
                <th scope="col"><?= $this->Paginator->sort('manufacturing_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('RTOLocationCode') ?></th>
                <th scope="col"><?= $this->Paginator->sort('PlaceOfRegistration') ?></th>
                <th scope="col"><?= $this->Paginator->sort('VehicleIDV') ?></th>
                <th scope="col"><?= $this->Paginator->sort('NetPremium') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ServiceTax') ?></th>
                <th scope="col"><?= $this->Paginator->sort('stampduty2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cgst') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sgst') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ugst') ?></th>
                <th scope="col"><?= $this->Paginator->sort('igst') ?></th>
                <th scope="col"><?= $this->Paginator->sort('totalPremium') ?></th>
                <th scope="col"><?= $this->Paginator->sort('policy_proposal_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('policy_effective_fromdate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('policy_effective_todate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('previous_policy_insurer') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pre_policy_expiry_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pre_policy_claim') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($customerVhicleDetails as $customerVhicleDetail): ?>
            <tr>
                <td><?= $this->Number->format($customerVhicleDetail->id) ?></td>
                <td><?= h($customerVhicleDetail->policyno) ?></td>
                <td><?= h($customerVhicleDetail->customer_emailid) ?></td>
                <td><?= h($customerVhicleDetail->product_code) ?></td>
                <td><?= h($customerVhicleDetail->product_name) ?></td>
                <td><?= h($customerVhicleDetail->vhicle_registration_no) ?></td>
                <td><?= h($customerVhicleDetail->car_state_name) ?></td>
                <td><?= h($customerVhicleDetail->car_city_name) ?></td>
                <td><?= $this->Number->format($customerVhicleDetail->car_state_code) ?></td>
                <td><?= $this->Number->format($customerVhicleDetail->car_city_code) ?></td>
                <td><?= $this->Number->format($customerVhicleDetail->car_pin_code) ?></td>
                <td><?= h($customerVhicleDetail->vhicle_engine_no) ?></td>
                <td><?= h($customerVhicleDetail->vhicle_chassis_no) ?></td>
                <td><?= h($customerVhicleDetail->body_color) ?></td>
                <td><?= h($customerVhicleDetail->fuel_type) ?></td>
                <td><?= h($customerVhicleDetail->vhicle_class) ?></td>
                <td><?= h($customerVhicleDetail->VehicleMake) ?></td>
                <td><?= $this->Number->format($customerVhicleDetail->VehicleClassCode) ?></td>
                <td><?= $this->Number->format($customerVhicleDetail->VehicleMakeCode) ?></td>
                <td><?= $this->Number->format($customerVhicleDetail->VehicleModelCode) ?></td>
                <td><?= $this->Number->format($customerVhicleDetail->BodyTypeCode) ?></td>
                <td><?= $this->Number->format($customerVhicleDetail->noofwheels) ?></td>
                <td><?= $this->Number->format($customerVhicleDetail->cubiccapacity) ?></td>
                <td><?= $this->Number->format($customerVhicleDetail->seatingcapacity) ?></td>
                <td><?= h($customerVhicleDetail->registrationzone) ?></td>
                <td><?= $this->Number->format($customerVhicleDetail->GrossVehicleWeight) ?></td>
                <td><?= $this->Number->format($customerVhicleDetail->CarryingCapacity) ?></td>
                <td><?= h($customerVhicleDetail->VehicleType) ?></td>
                <td><?= h($customerVhicleDetail->vehicle_model_name) ?></td>
                <td><?= $this->Number->format($customerVhicleDetail->VehicleExShowroomPrice) ?></td>
                <td><?= h($customerVhicleDetail->DateOfFirstRegistration) ?></td>
                <td><?= h($customerVhicleDetail->manufacturing_date) ?></td>
                <td><?= $this->Number->format($customerVhicleDetail->RTOLocationCode) ?></td>
                <td><?= h($customerVhicleDetail->PlaceOfRegistration) ?></td>
                <td><?= h($customerVhicleDetail->VehicleIDV) ?></td>
                <td><?= $this->Number->format($customerVhicleDetail->NetPremium) ?></td>
                <td><?= $this->Number->format($customerVhicleDetail->ServiceTax) ?></td>
                <td><?= h($customerVhicleDetail->stampduty2) ?></td>
                <td><?= $this->Number->format($customerVhicleDetail->cgst) ?></td>
                <td><?= $this->Number->format($customerVhicleDetail->sgst) ?></td>
                <td><?= $this->Number->format($customerVhicleDetail->ugst) ?></td>
                <td><?= $this->Number->format($customerVhicleDetail->igst) ?></td>
                <td><?= $this->Number->format($customerVhicleDetail->totalPremium) ?></td>
                <td><?= h($customerVhicleDetail->policy_proposal_date) ?></td>
                <td><?= h($customerVhicleDetail->policy_effective_fromdate) ?></td>
                <td><?= h($customerVhicleDetail->policy_effective_todate) ?></td>
                <td><?= h($customerVhicleDetail->previous_policy_insurer) ?></td>
                <td><?= h($customerVhicleDetail->pre_policy_expiry_date) ?></td>
                <td><?= h($customerVhicleDetail->pre_policy_claim) ?></td>
                <td><?= h($customerVhicleDetail->created) ?></td>
                <td><?= h($customerVhicleDetail->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $customerVhicleDetail->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $customerVhicleDetail->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $customerVhicleDetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customerVhicleDetail->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
