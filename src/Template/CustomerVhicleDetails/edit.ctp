<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CustomerVhicleDetail $customerVhicleDetail
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $customerVhicleDetail->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $customerVhicleDetail->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Customer Vhicle Details'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="customerVhicleDetails form large-9 medium-8 columns content">
    <?= $this->Form->create($customerVhicleDetail) ?>
    <fieldset>
        <legend><?= __('Edit Customer Vhicle Detail') ?></legend>
        <?php
            echo $this->Form->control('policyno');
            echo $this->Form->control('customer_emailid');
            echo $this->Form->control('product_code');
            echo $this->Form->control('product_name');
            echo $this->Form->control('vhicle_registration_no');
            echo $this->Form->control('car_address');
            echo $this->Form->control('car_state_name');
            echo $this->Form->control('car_city_name');
            echo $this->Form->control('car_state_code');
            echo $this->Form->control('car_city_code');
            echo $this->Form->control('car_pin_code');
            echo $this->Form->control('vhicle_engine_no');
            echo $this->Form->control('vhicle_chassis_no');
            echo $this->Form->control('body_color');
            echo $this->Form->control('fuel_type');
            echo $this->Form->control('vhicle_class');
            echo $this->Form->control('VehicleMake');
            echo $this->Form->control('VehicleClassCode');
            echo $this->Form->control('VehicleMakeCode');
            echo $this->Form->control('VehicleModelCode');
            echo $this->Form->control('BodyTypeCode');
            echo $this->Form->control('noofwheels');
            echo $this->Form->control('cubiccapacity');
            echo $this->Form->control('seatingcapacity');
            echo $this->Form->control('registrationzone');
            echo $this->Form->control('GrossVehicleWeight');
            echo $this->Form->control('CarryingCapacity');
            echo $this->Form->control('VehicleType');
            echo $this->Form->control('vehicle_model_name');
            echo $this->Form->control('VehicleExShowroomPrice');
            echo $this->Form->control('DateOfFirstRegistration');
            echo $this->Form->control('manufacturing_date');
            echo $this->Form->control('RTOLocationCode');
            echo $this->Form->control('PlaceOfRegistration');
            echo $this->Form->control('VehicleIDV');
            echo $this->Form->control('NetPremium');
            echo $this->Form->control('ServiceTax');
            echo $this->Form->control('stampduty2');
            echo $this->Form->control('cgst');
            echo $this->Form->control('sgst');
            echo $this->Form->control('ugst');
            echo $this->Form->control('igst');
            echo $this->Form->control('totalPremium');
            echo $this->Form->control('policy_proposal_date');
            echo $this->Form->control('policy_effective_fromdate');
            echo $this->Form->control('policy_effective_todate');
            echo $this->Form->control('previous_policy_insurer');
            echo $this->Form->control('pre_policy_expiry_date');
            echo $this->Form->control('pre_policy_claim');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
