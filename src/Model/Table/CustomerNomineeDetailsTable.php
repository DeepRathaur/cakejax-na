<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CustomerNomineeDetails Model
 *
 * @property \App\Model\Table\CustomersTable|\Cake\ORM\Association\BelongsTo $Customers
 * @property \App\Model\Table\LoginsTable|\Cake\ORM\Association\BelongsTo $Logins
 *
 * @method \App\Model\Entity\CustomerNomineeDetail get($primaryKey, $options = [])
 * @method \App\Model\Entity\CustomerNomineeDetail newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CustomerNomineeDetail[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CustomerNomineeDetail|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CustomerNomineeDetail patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CustomerNomineeDetail[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CustomerNomineeDetail findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CustomerNomineeDetailsTable extends Table
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

        $this->setTable('customer_nominee_details');
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
            ->scalar('nominee_title')
            ->maxLength('nominee_title', 100)
            ->allowEmpty('nominee_title');

        $validator
            ->scalar('nominee_fname')
            ->maxLength('nominee_fname', 255)
            ->allowEmpty('nominee_fname');

        $validator
            ->scalar('nominee_mname')
            ->maxLength('nominee_mname', 255)
            ->allowEmpty('nominee_mname');

        $validator
            ->scalar('nominee_lname')
            ->maxLength('nominee_lname', 255)
            ->allowEmpty('nominee_lname');

        $validator
            ->scalar('relation')
            ->maxLength('relation', 255)
            ->allowEmpty('relation');

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
