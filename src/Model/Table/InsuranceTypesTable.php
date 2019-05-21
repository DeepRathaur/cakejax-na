<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * InsuranceTypes Model
 *
 * @method \App\Model\Entity\InsuranceType get($primaryKey, $options = [])
 * @method \App\Model\Entity\InsuranceType newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\InsuranceType[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\InsuranceType|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\InsuranceType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\InsuranceType[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\InsuranceType findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class InsuranceTypesTable extends Table
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

        $this->setTable('insurance_types');
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
            ->scalar('insurance_type_name')
            ->maxLength('insurance_type_name', 100)
            ->requirePresence('insurance_type_name', 'create')
            ->notEmpty('insurance_type_name');

        $validator
            ->boolean('status')
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        return $validator;
    }
}
