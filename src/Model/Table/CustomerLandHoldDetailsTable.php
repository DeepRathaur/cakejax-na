<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CustomerLandHoldDetails Model
 *
 * @property \App\Model\Table\CustomersTable|\Cake\ORM\Association\BelongsTo $Customers
 * @property \App\Model\Table\LoginsTable|\Cake\ORM\Association\BelongsTo $Logins
 * @property \App\Model\Table\StatesTable|\Cake\ORM\Association\BelongsTo $States
 * @property \App\Model\Table\DistrictsTable|\Cake\ORM\Association\BelongsTo $Districts
 *
 * @method \App\Model\Entity\CustomerLandHoldDetail get($primaryKey, $options = [])
 * @method \App\Model\Entity\CustomerLandHoldDetail newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CustomerLandHoldDetail[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CustomerLandHoldDetail|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CustomerLandHoldDetail patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CustomerLandHoldDetail[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CustomerLandHoldDetail findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CustomerLandHoldDetailsTable extends Table
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

        $this->setTable('customer_land_hold_details');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Customers', [
            'foreignKey' => 'customer_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Logins', [
            'foreignKey' => 'login_id',
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
            ->allowEmpty('surveyno1');

        $validator
            ->allowEmpty('surveyno2');

        $validator
            ->scalar('extentofland')
            ->maxLength('extentofland', 100)
            ->allowEmpty('extentofland');

        $validator
            ->scalar('city')
            ->maxLength('city', 255)
            ->allowEmpty('city');

        $validator
            ->scalar('block')
            ->maxLength('block', 255)
            ->allowEmpty('block');

        $validator
            ->integer('pin_code')
            ->allowEmpty('pin_code');

        $validator
            ->scalar('extentofland2')
            ->maxLength('extentofland2', 100)
            ->allowEmpty('extentofland2');

        $validator
            ->scalar('city2')
            ->maxLength('city2', 255)
            ->allowEmpty('city2');

        $validator
            ->scalar('block2')
            ->maxLength('block2', 255)
            ->allowEmpty('block2');

        $validator
            ->integer('state_id2')
            ->requirePresence('state_id2', 'create')
            ->notEmpty('state_id2');

        $validator
            ->integer('district_id2')
            ->requirePresence('district_id2', 'create')
            ->notEmpty('district_id2');

        $validator
            ->integer('pin_code2')
            ->allowEmpty('pin_code2');

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
        $rules->add($rules->existsIn(['customer_id'], 'Customers'));
        $rules->add($rules->existsIn(['login_id'], 'Logins'));
        $rules->add($rules->existsIn(['state_id'], 'States'));
        $rules->add($rules->existsIn(['district_id'], 'Districts'));

        return $rules;
    }
}
