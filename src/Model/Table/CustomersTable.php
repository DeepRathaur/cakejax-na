<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Customers Model
 *
 * @property \App\Model\Table\LoginsTable|\Cake\ORM\Association\BelongsTo $Logins
 * @property \App\Model\Table\CustomersTable|\Cake\ORM\Association\BelongsTo $ParentCustomers
 * @property \App\Model\Table\ZonesTable|\Cake\ORM\Association\BelongsTo $Zones
 * @property \App\Model\Table\StatesTable|\Cake\ORM\Association\BelongsTo $States
 * @property \App\Model\Table\DistrictsTable|\Cake\ORM\Association\BelongsTo $Districts
 * @property \App\Model\Table\CustomerBankDetailsTable|\Cake\ORM\Association\HasMany $CustomerBankDetails
 * @property \App\Model\Table\CustomerContactDetailsTable|\Cake\ORM\Association\HasMany $CustomerContactDetails
 * @property \App\Model\Table\CustomerCropFieldsTable|\Cake\ORM\Association\HasMany $CustomerCropFields
 * @property \App\Model\Table\CustomerDocumentsTable|\Cake\ORM\Association\HasMany $CustomerDocuments
 * @property \App\Model\Table\CustomerInsuranceTypesTable|\Cake\ORM\Association\HasMany $CustomerInsuranceTypes
 * @property \App\Model\Table\CustomerLandHoldDetailsTable|\Cake\ORM\Association\HasMany $CustomerLandHoldDetails
 * @property \App\Model\Table\CustomerNomineeDetailsTable|\Cake\ORM\Association\HasMany $CustomerNomineeDetails
 * @property \App\Model\Table\CustomersTable|\Cake\ORM\Association\HasMany $ChildCustomers
 *
 * @method \App\Model\Entity\Customer get($primaryKey, $options = [])
 * @method \App\Model\Entity\Customer newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Customer[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Customer|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Customer patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Customer[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Customer findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CustomersTable extends Table
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

        $this->setTable('customers');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Logins', [
            'foreignKey' => 'login_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('ParentCustomers', [
            'className' => 'Customers',
            'foreignKey' => 'parent_id'
        ]);
        $this->belongsTo('Zones', [
            'foreignKey' => 'zone_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('States', [
            'foreignKey' => 'state_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Districts', [
            'foreignKey' => 'district_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('CustomerBankDetails', [
            'foreignKey' => 'customer_id'
        ]);
        $this->hasMany('CustomerContactDetails', [
            'foreignKey' => 'customer_id'
        ]);
        $this->hasMany('CustomerCropFields', [
            'foreignKey' => 'customer_id'
        ]);
        $this->hasMany('CustomerDocuments', [
            'foreignKey' => 'customer_id'
        ]);
        $this->hasMany('CustomerInsuranceTypes', [
            'foreignKey' => 'customer_id'
        ]);
        $this->hasMany('CustomerLandHoldDetails', [
            'foreignKey' => 'customer_id'
        ]);
        $this->hasMany('CustomerNomineeDetails', [
            'foreignKey' => 'customer_id'
        ]);
        $this->hasMany('ChildCustomers', [
            'className' => 'Customers',
            'foreignKey' => 'parent_id'
        ]);
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
            ->scalar('title')
            ->maxLength('title', 20)
            ->requirePresence('title', 'create')
            ->notEmpty('title');

        $validator
            ->scalar('fname')
            ->maxLength('fname', 100)
            ->requirePresence('fname', 'create')
            ->notEmpty('fname');

        $validator
            ->scalar('mname')
            ->maxLength('mname', 100)
            ->requirePresence('mname', 'create')
            ->notEmpty('mname');

        $validator
            ->scalar('lname')
            ->maxLength('lname', 100)
            ->requirePresence('lname', 'create')
            ->notEmpty('lname');

        $validator
            ->requirePresence('aadhar_card', 'create')
            ->notEmpty('aadhar_card');

        $validator
            ->scalar('pan_card')
            ->maxLength('pan_card', 100)
            ->requirePresence('pan_card', 'create')
            ->notEmpty('pan_card');

        $validator
            ->scalar('father_name')
            ->maxLength('father_name', 100)
            ->requirePresence('father_name', 'create')
            ->notEmpty('father_name');

        $validator
            ->scalar('dob')
            ->maxLength('dob', 100)
            ->requirePresence('dob', 'create')
            ->notEmpty('dob');

        $validator
            ->scalar('gender')
            ->maxLength('gender', 50)
            ->requirePresence('gender', 'create')
            ->notEmpty('gender');

        $validator
            ->scalar('mobile_no')
            ->maxLength('mobile_no', 255)
            ->requirePresence('mobile_no', 'create')
            ->notEmpty('mobile_no');

        $validator
            ->scalar('occupation')
            ->maxLength('occupation', 100)
            ->requirePresence('occupation', 'create')
            ->notEmpty('occupation');

        $validator
            ->scalar('address')
            ->requirePresence('address', 'create')
            ->notEmpty('address');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        $validator
            ->scalar('password')
            ->maxLength('password', 255)
            ->requirePresence('password', 'create')
            ->notEmpty('password');

        $validator
            ->scalar('profile_picture')
            ->maxLength('profile_picture', 255)
            ->requirePresence('profile_picture', 'create')
            ->notEmpty('profile_picture');

        $validator
            ->scalar('uuid')
            ->maxLength('uuid', 255)
            ->requirePresence('uuid', 'create')
            ->notEmpty('uuid');

        $validator
            ->scalar('remarks')
            ->requirePresence('remarks', 'create')
            ->notEmpty('remarks');

        $validator
            ->boolean('status')
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['login_id'], 'Logins'));
        $rules->add($rules->existsIn(['parent_id'], 'ParentCustomers'));
        $rules->add($rules->existsIn(['zone_id'], 'Zones'));
        $rules->add($rules->existsIn(['state_id'], 'States'));
        $rules->add($rules->existsIn(['district_id'], 'Districts'));

        return $rules;
    }
}
