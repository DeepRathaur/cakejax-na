<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CustomerVhicleDetails Model
 *
 * @method \App\Model\Entity\CustomerVhicleDetail get($primaryKey, $options = [])
 * @method \App\Model\Entity\CustomerVhicleDetail newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CustomerVhicleDetail[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CustomerVhicleDetail|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CustomerVhicleDetail patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CustomerVhicleDetail[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CustomerVhicleDetail findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CustomerVhicleDetailsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('customer_vhicle_details');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('policyno')
            ->maxLength('policyno', 200)
            ->requirePresence('policyno', 'create')
            ->notEmpty('policyno');

        $validator
            ->scalar('customer_emailid')
            ->maxLength('customer_emailid', 100)
            ->allowEmpty('customer_emailid');

        $validator
            ->scalar('product_code')
            ->maxLength('product_code', 50)
            ->allowEmpty('product_code');

        $validator
            ->scalar('product_name')
            ->maxLength('product_name', 50)
            ->allowEmpty('product_name');

        $validator
            ->scalar('vhicle_registration_no')
            ->maxLength('vhicle_registration_no', 100)
            ->allowEmpty('vhicle_registration_no');

        $validator
            ->scalar('car_address')
            ->allowEmpty('car_address');

        $validator
            ->scalar('car_state_name')
            ->maxLength('car_state_name', 100)
            ->allowEmpty('car_state_name');

        $validator
            ->scalar('car_city_name')
            ->maxLength('car_city_name', 100)
            ->allowEmpty('car_city_name');

        $validator
            ->integer('car_state_code')
            ->allowEmpty('car_state_code');

        $validator
            ->integer('car_city_code')
            ->allowEmpty('car_city_code');

        $validator
            ->integer('car_pin_code')
            ->allowEmpty('car_pin_code');

        $validator
            ->scalar('vhicle_engine_no')
            ->maxLength('vhicle_engine_no', 100)
            ->allowEmpty('vhicle_engine_no');

        $validator
            ->scalar('vhicle_chassis_no')
            ->maxLength('vhicle_chassis_no', 100)
            ->allowEmpty('vhicle_chassis_no');

        $validator
            ->scalar('body_color')
            ->maxLength('body_color', 50)
            ->allowEmpty('body_color');

        $validator
            ->scalar('fuel_type')
            ->maxLength('fuel_type', 50)
            ->allowEmpty('fuel_type');

        $validator
            ->scalar('vhicle_class')
            ->maxLength('vhicle_class', 50)
            ->allowEmpty('vhicle_class');

        $validator
            ->scalar('VehicleMake')
            ->maxLength('VehicleMake', 100)
            ->allowEmpty('VehicleMake');

        $validator
            ->integer('VehicleClassCode')
            ->allowEmpty('VehicleClassCode');

        $validator
            ->integer('VehicleMakeCode')
            ->allowEmpty('VehicleMakeCode');

        $validator
            ->integer('VehicleModelCode')
            ->allowEmpty('VehicleModelCode');

        $validator
            ->integer('BodyTypeCode')
            ->allowEmpty('BodyTypeCode');

        $validator
            ->integer('noofwheels')
            ->allowEmpty('noofwheels');

        $validator
            ->integer('cubiccapacity')
            ->allowEmpty('cubiccapacity');

        $validator
            ->integer('seatingcapacity')
            ->allowEmpty('seatingcapacity');

        $validator
            ->scalar('registrationzone')
            ->maxLength('registrationzone', 50)
            ->allowEmpty('registrationzone');

        $validator
            ->integer('GrossVehicleWeight')
            ->allowEmpty('GrossVehicleWeight');

        $validator
            ->integer('CarryingCapacity')
            ->allowEmpty('CarryingCapacity');

        $validator
            ->scalar('VehicleType')
            ->maxLength('VehicleType', 50)
            ->allowEmpty('VehicleType');

        $validator
            ->scalar('vehicle_model_name')
            ->maxLength('vehicle_model_name', 50)
            ->allowEmpty('vehicle_model_name');

        $validator
            ->allowEmpty('VehicleExShowroomPrice');

        $validator
            ->scalar('DateOfFirstRegistration')
            ->maxLength('DateOfFirstRegistration', 100)
            ->allowEmpty('DateOfFirstRegistration');

        $validator
            ->scalar('manufacturing_date')
            ->maxLength('manufacturing_date', 100)
            ->allowEmpty('manufacturing_date');

        $validator
            ->integer('RTOLocationCode')
            ->allowEmpty('RTOLocationCode');

        $validator
            ->scalar('PlaceOfRegistration')
            ->maxLength('PlaceOfRegistration', 100)
            ->allowEmpty('PlaceOfRegistration');

        $validator
            ->scalar('VehicleIDV')
            ->maxLength('VehicleIDV', 200)
            ->allowEmpty('VehicleIDV');

        $validator
            ->decimal('NetPremium')
            ->allowEmpty('NetPremium');

        $validator
            ->decimal('ServiceTax')
            ->allowEmpty('ServiceTax');

        $validator
            ->scalar('stampduty2')
            ->maxLength('stampduty2', 50)
            ->allowEmpty('stampduty2');

        $validator
            ->decimal('cgst')
            ->allowEmpty('cgst');

        $validator
            ->decimal('sgst')
            ->allowEmpty('sgst');

        $validator
            ->decimal('ugst')
            ->allowEmpty('ugst');

        $validator
            ->decimal('igst')
            ->allowEmpty('igst');

        $validator
            ->decimal('totalPremium')
            ->allowEmpty('totalPremium');

        $validator
            ->scalar('policy_proposal_date')
            ->maxLength('policy_proposal_date', 50)
            ->allowEmpty('policy_proposal_date');

        $validator
            ->scalar('policy_effective_fromdate')
            ->maxLength('policy_effective_fromdate', 50)
            ->allowEmpty('policy_effective_fromdate');

        $validator
            ->scalar('policy_effective_todate')
            ->maxLength('policy_effective_todate', 50)
            ->allowEmpty('policy_effective_todate');

        $validator
            ->scalar('previous_policy_insurer')
            ->maxLength('previous_policy_insurer', 50)
            ->allowEmpty('previous_policy_insurer');

        $validator
            ->scalar('pre_policy_expiry_date')
            ->maxLength('pre_policy_expiry_date', 50)
            ->allowEmpty('pre_policy_expiry_date');

        $validator
            ->scalar('pre_policy_claim')
            ->maxLength('pre_policy_claim', 50)
            ->allowEmpty('pre_policy_claim');

        return $validator;
    }
}
