<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CustomerCropFields Model
 *
 * @property \App\Model\Table\CustomersTable|\Cake\ORM\Association\BelongsTo $Customers
 * @property \App\Model\Table\LoginsTable|\Cake\ORM\Association\BelongsTo $Logins
 *
 * @method \App\Model\Entity\CustomerCropField get($primaryKey, $options = [])
 * @method \App\Model\Entity\CustomerCropField newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CustomerCropField[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CustomerCropField|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CustomerCropField patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CustomerCropField[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CustomerCropField findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CustomerCropFieldsTable extends Table
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

        $this->setTable('customer_crop_fields');
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
            ->scalar('farmer_classification')
            ->maxLength('farmer_classification', 200)
            ->allowEmpty('farmer_classification');

        $validator
            ->scalar('identity_type')
            ->maxLength('identity_type', 255)
            ->allowEmpty('identity_type');

        $validator
            ->scalar('identity_no')
            ->maxLength('identity_no', 200)
            ->allowEmpty('identity_no');

        $validator
            ->scalar('farmer_category')
            ->maxLength('farmer_category', 100)
            ->allowEmpty('farmer_category');

        $validator
            ->scalar('farmer_religion')
            ->allowEmpty('farmer_religion');

        $validator
            ->scalar('farmer_community')
            ->maxLength('farmer_community', 100)
            ->allowEmpty('farmer_community');

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
