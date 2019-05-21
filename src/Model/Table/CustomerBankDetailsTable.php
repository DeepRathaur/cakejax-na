<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CustomerBankDetails Model
 *
 * @property \App\Model\Table\CustomersTable|\Cake\ORM\Association\BelongsTo $Customers
 * @property \App\Model\Table\LoginsTable|\Cake\ORM\Association\BelongsTo $Logins
 *
 * @method \App\Model\Entity\CustomerBankDetail get($primaryKey, $options = [])
 * @method \App\Model\Entity\CustomerBankDetail newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CustomerBankDetail[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CustomerBankDetail|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CustomerBankDetail patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CustomerBankDetail[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CustomerBankDetail findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CustomerBankDetailsTable extends Table
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

        $this->setTable('customer_bank_details');
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
            ->scalar('account_holder_name')
            ->maxLength('account_holder_name', 200)
            ->allowEmpty('account_holder_name');

        $validator
            ->scalar('bank_name')
            ->maxLength('bank_name', 255)
            ->allowEmpty('bank_name');

        $validator
            ->scalar('branch_name')
            ->maxLength('branch_name', 200)
            ->allowEmpty('branch_name');

        $validator
            ->scalar('ifs_code')
            ->maxLength('ifs_code', 100)
            ->allowEmpty('ifs_code');

        $validator
            ->scalar('branch_address')
            ->allowEmpty('branch_address');

        $validator
            ->scalar('account_type')
            ->maxLength('account_type', 100)
            ->allowEmpty('account_type');

        $validator
            ->scalar('account_no')
            ->maxLength('account_no', 255)
            ->allowEmpty('account_no');

        $validator
            ->scalar('bank_phone_no')
            ->maxLength('bank_phone_no', 255)
            ->allowEmpty('bank_phone_no');

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

        return $rules;
    }
}
