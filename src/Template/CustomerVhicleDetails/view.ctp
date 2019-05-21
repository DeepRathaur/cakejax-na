<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CustomerVhicleDetail $customerVhicleDetail
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Customer Vhicle Detail'), ['action' => 'edit', $customerVhicleDetail->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Customer Vhicle Detail'), ['action' => 'delete', $customerVhicleDetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customerVhicleDetail->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Customer Vhicle Details'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer Vhicle Detail'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="customerVhicleDetails view large-9 medium-8 columns content">
    <h3><?= h($customerVhicleDetail->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Policyno') ?></th>
            <td><?= h($customerVhicleDetail->policyno) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Customer Emailid') ?></th>
            <td><?= h($customerVhicleDetail->customer_emailid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Product Code') ?></th>
            <td><?= h($customerVhicleDetail->product_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Product Name') ?></th>
            <td><?= h($customerVhicleDetail->product_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Vhicle Registration No') ?></th>
            <td><?= h($customerVhicleDetail->vhicle_registration_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Car State Name') ?></th>
            <td><?= h($customerVhicleDetail->car_state_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Car City Name') ?></th>
            <td><?= h($customerVhicleDetail->car_city_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Vhicle Engine No') ?></th>
            <td><?= h($customerVhicleDetail->vhicle_engine_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Vhicle Chassis No') ?></th>
            <td><?= h($customerVhicleDetail->vhicle_chassis_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Body Color') ?></th>
            <td><?= h($customerVhicleDetail->body_color) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fuel Type') ?></th>
            <td><?= h($customerVhicleDetail->fuel_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Vhicle Class') ?></th>
            <td><?= h($customerVhicleDetail->vhicle_class) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('VehicleMake') ?></th>
            <td><?= h($customerVhicleDetail->VehicleMake) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Registrationzone') ?></th>
            <td><?= h($customerVhicleDetail->registrationzone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('VehicleType') ?></th>
            <td><?= h($customerVhicleDetail->VehicleType) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Vehicle Model Name') ?></th>
            <td><?= h($customerVhicleDetail->vehicle_model_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DateOfFirstRegistration') ?></th>
            <td><?= h($customerVhicleDetail->DateOfFirstRegistration) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Manufacturing Date') ?></th>
            <td><?= h($customerVhicleDetail->manufacturing_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('PlaceOfRegistration') ?></th>
            <td><?= h($customerVhicleDetail->PlaceOfRegistration) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('VehicleIDV') ?></th>
            <td><?= h($customerVhicleDetail->VehicleIDV) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Stampduty2') ?></th>
            <td><?= h($customerVhicleDetail->stampduty2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Policy Proposal Date') ?></th>
            <td><?= h($customerVhicleDetail->policy_proposal_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Policy Effective Fromdate') ?></th>
            <td><?= h($customerVhicleDetail->policy_effective_fromdate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Policy Effective Todate') ?></th>
            <td><?= h($customerVhicleDetail->policy_effective_todate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Previous Policy Insurer') ?></th>
            <td><?= h($customerVhicleDetail->previous_policy_insurer) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pre Policy Expiry Date') ?></th>
            <td><?= h($customerVhicleDetail->pre_policy_expiry_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pre Policy Claim') ?></th>
            <td><?= h($customerVhicleDetail->pre_policy_claim) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($customerVhicleDetail->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Car State Code') ?></th>
            <td><?= $this->Number->format($customerVhicleDetail->car_state_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Car City Code') ?></th>
            <td><?= $this->Number->format($customerVhicleDetail->car_city_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Car Pin Code') ?></th>
            <td><?= $this->Number->format($customerVhicleDetail->car_pin_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('VehicleClassCode') ?></th>
            <td><?= $this->Number->format($customerVhicleDetail->VehicleClassCode) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('VehicleMakeCode') ?></th>
            <td><?= $this->Number->format($customerVhicleDetail->VehicleMakeCode) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('VehicleModelCode') ?></th>
            <td><?= $this->Number->format($customerVhicleDetail->VehicleModelCode) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('BodyTypeCode') ?></th>
            <td><?= $this->Number->format($customerVhicleDetail->BodyTypeCode) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Noofwheels') ?></th>
            <td><?= $this->Number->format($customerVhicleDetail->noofwheels) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cubiccapacity') ?></th>
            <td><?= $this->Number->format($customerVhicleDetail->cubiccapacity) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Seatingcapacity') ?></th>
            <td><?= $this->Number->format($customerVhicleDetail->seatingcapacity) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('GrossVehicleWeight') ?></th>
            <td><?= $this->Number->format($customerVhicleDetail->GrossVehicleWeight) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CarryingCapacity') ?></th>
            <td><?= $this->Number->format($customerVhicleDetail->CarryingCapacity) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('VehicleExShowroomPrice') ?></th>
            <td><?= $this->Number->format($customerVhicleDetail->VehicleExShowroomPrice) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('RTOLocationCode') ?></th>
            <td><?= $this->Number->format($customerVhicleDetail->RTOLocationCode) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('NetPremium') ?></th>
            <td><?= $this->Number->format($customerVhicleDetail->NetPremium) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ServiceTax') ?></th>
            <td><?= $this->Number->format($customerVhicleDetail->ServiceTax) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cgst') ?></th>
            <td><?= $this->Number->format($customerVhicleDetail->cgst) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sgst') ?></th>
            <td><?= $this->Number->format($customerVhicleDetail->sgst) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ugst') ?></th>
            <td><?= $this->Number->format($customerVhicleDetail->ugst) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Igst') ?></th>
            <td><?= $this->Number->format($customerVhicleDetail->igst) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('TotalPremium') ?></th>
            <td><?= $this->Number->format($customerVhicleDetail->totalPremium) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($customerVhicleDetail->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($customerVhicleDetail->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Car Address') ?></h4>
        <?= $this->Text->autoParagraph(h($customerVhicleDetail->car_address)); ?>
    </div>
</div>
