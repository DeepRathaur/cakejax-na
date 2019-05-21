<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CustomerVhicleDetail Entity
 *
 * @property int $id
 * @property string $policyno
 * @property string $customer_emailid
 * @property string $product_code
 * @property string $product_name
 * @property string $vhicle_registration_no
 * @property string $car_address
 * @property string $car_state_name
 * @property string $car_city_name
 * @property int $car_state_code
 * @property int $car_city_code
 * @property int $car_pin_code
 * @property string $vhicle_engine_no
 * @property string $vhicle_chassis_no
 * @property string $body_color
 * @property string $fuel_type
 * @property string $vhicle_class
 * @property string $VehicleMake
 * @property int $VehicleClassCode
 * @property int $VehicleMakeCode
 * @property int $VehicleModelCode
 * @property int $BodyTypeCode
 * @property int $noofwheels
 * @property int $cubiccapacity
 * @property int $seatingcapacity
 * @property string $registrationzone
 * @property int $GrossVehicleWeight
 * @property int $CarryingCapacity
 * @property string $VehicleType
 * @property string $vehicle_model_name
 * @property int $VehicleExShowroomPrice
 * @property string $DateOfFirstRegistration
 * @property string $manufacturing_date
 * @property int $RTOLocationCode
 * @property string $PlaceOfRegistration
 * @property string $VehicleIDV
 * @property float $NetPremium
 * @property float $ServiceTax
 * @property string $stampduty2
 * @property float $cgst
 * @property float $sgst
 * @property float $ugst
 * @property float $igst
 * @property float $totalPremium
 * @property string $policy_proposal_date
 * @property string $policy_effective_fromdate
 * @property string $policy_effective_todate
 * @property string $previous_policy_insurer
 * @property string $pre_policy_expiry_date
 * @property string $pre_policy_claim
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class CustomerVhicleDetail extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'policyno' => true,
        'customer_emailid' => true,
        'product_code' => true,
        'product_name' => true,
        'vhicle_registration_no' => true,
        'car_address' => true,
        'car_state_name' => true,
        'car_city_name' => true,
        'car_state_code' => true,
        'car_city_code' => true,
        'car_pin_code' => true,
        'vhicle_engine_no' => true,
        'vhicle_chassis_no' => true,
        'body_color' => true,
        'fuel_type' => true,
        'vhicle_class' => true,
        'VehicleMake' => true,
        'VehicleClassCode' => true,
        'VehicleMakeCode' => true,
        'VehicleModelCode' => true,
        'BodyTypeCode' => true,
        'noofwheels' => true,
        'cubiccapacity' => true,
        'seatingcapacity' => true,
        'registrationzone' => true,
        'GrossVehicleWeight' => true,
        'CarryingCapacity' => true,
        'VehicleType' => true,
        'vehicle_model_name' => true,
        'VehicleExShowroomPrice' => true,
        'DateOfFirstRegistration' => true,
        'manufacturing_date' => true,
        'RTOLocationCode' => true,
        'PlaceOfRegistration' => true,
        'VehicleIDV' => true,
        'NetPremium' => true,
        'ServiceTax' => true,
        'stampduty2' => true,
        'cgst' => true,
        'sgst' => true,
        'ugst' => true,
        'igst' => true,
        'totalPremium' => true,
        'policy_proposal_date' => true,
        'policy_effective_fromdate' => true,
        'policy_effective_todate' => true,
        'previous_policy_insurer' => true,
        'pre_policy_expiry_date' => true,
        'pre_policy_claim' => true,
        'created' => true,
        'modified' => true
    ];
}
