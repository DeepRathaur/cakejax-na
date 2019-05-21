<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RtoCityMasters Model
 *
 * @property \App\Model\Table\StatesTable|\Cake\ORM\Association\BelongsTo $States
 *
 * @method \App\Model\Entity\RtoCityMaster get($primaryKey, $options = [])
 * @method \App\Model\Entity\RtoCityMaster newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\RtoCityMaster[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\RtoCityMaster|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RtoCityMaster patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\RtoCityMaster[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\RtoCityMaster findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class RtoCityMastersTable extends Table
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

        $this->setTable('rto_city_masters');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('States', [
            'foreignKey' => 'state_id',
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
            ->scalar('city_name')
            ->maxLength('city_name', 100)
            ->requirePresence('city_name', 'create')
            ->notEmpty('city_name');

        $validator
            ->scalar('region_code')
            ->maxLength('region_code', 100)
            ->requirePresence('region_code', 'create')
            ->notEmpty('region_code');

        $validator
            ->scalar('alias_region_code')
            ->maxLength('alias_region_code', 100)
            ->requirePresence('alias_region_code', 'create')
            ->notEmpty('alias_region_code');

        $validator
            ->scalar('name')
            ->maxLength('name', 100)
            ->requirePresence('name', 'create')
            ->notEmpty('name');

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
        $rules->add($rules->existsIn(['state_id'], 'States'));

        return $rules;
    }
}
