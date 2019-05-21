<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ClaimRecords Model
 *
 * @method \App\Model\Entity\ClaimRecord get($primaryKey, $options = [])
 * @method \App\Model\Entity\ClaimRecord newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ClaimRecord[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ClaimRecord|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ClaimRecord patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ClaimRecord[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ClaimRecord findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ClaimRecordsTable extends Table
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

        $this->setTable('claim_records');
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
            ->scalar('policy_no')
            ->maxLength('policy_no', 200)
            ->requirePresence('policy_no', 'create')
            ->notEmpty('policy_no');

        $validator
            ->scalar('message')
            ->maxLength('message', 200)
            ->requirePresence('message', 'create')
            ->notEmpty('message');

        $validator
            ->scalar('mobile_no')
            ->maxLength('mobile_no', 200)
            ->requirePresence('mobile_no', 'create')
            ->notEmpty('mobile_no');

        return $validator;
    }
}
