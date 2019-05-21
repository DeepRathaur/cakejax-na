<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RtoStateMasters Model
 *
 * @method \App\Model\Entity\RtoStateMaster get($primaryKey, $options = [])
 * @method \App\Model\Entity\RtoStateMaster newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\RtoStateMaster[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\RtoStateMaster|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RtoStateMaster patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\RtoStateMaster[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\RtoStateMaster findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class RtoStateMastersTable extends Table
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

        $this->setTable('rto_state_masters');
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
            ->scalar('state_name')
            ->maxLength('state_name', 100)
            ->requirePresence('state_name', 'create')
            ->notEmpty('state_name');

        $validator
            ->scalar('zone')
            ->maxLength('zone', 11)
            ->requirePresence('zone', 'create')
            ->notEmpty('zone');

        return $validator;
    }
}
