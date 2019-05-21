<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Schemes Model
 *
 * @property \App\Model\Table\SchemesTable|\Cake\ORM\Association\BelongsTo $ParentSchemes
 * @property \App\Model\Table\ZonesTable|\Cake\ORM\Association\BelongsTo $Zones
 * @property \App\Model\Table\StatesTable|\Cake\ORM\Association\BelongsTo $States
 * @property \App\Model\Table\DistrictsTable|\Cake\ORM\Association\BelongsTo $Districts
 * @property \App\Model\Table\SchemesTable|\Cake\ORM\Association\HasMany $ChildSchemes
 *
 * @method \App\Model\Entity\Scheme get($primaryKey, $options = [])
 * @method \App\Model\Entity\Scheme newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Scheme[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Scheme|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Scheme patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Scheme[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Scheme findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SchemesTable extends Table
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

        $this->setTable('schemes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('ParentSchemes', [
            'className' => 'Schemes',
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
        $this->hasMany('ChildSchemes', [
            'className' => 'Schemes',
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
            ->scalar('scheme_name')
            ->maxLength('scheme_name', 100)
            ->requirePresence('scheme_name', 'create')
            ->notEmpty('scheme_name');

        $validator
            ->dateTime('date_from')
            ->requirePresence('date_from', 'create')
            ->notEmpty('date_from');

        $validator
            ->dateTime('date_to')
            ->requirePresence('date_to', 'create')
            ->notEmpty('date_to');

        $validator
            ->scalar('insurance_type')
            ->maxLength('insurance_type', 100)
            ->requirePresence('insurance_type', 'create')
            ->notEmpty('insurance_type');

        $validator
            ->integer('commission')
            ->requirePresence('commission', 'create')
            ->notEmpty('commission');

        $validator
            ->requirePresence('target_amount', 'create')
            ->notEmpty('target_amount');

        $validator
            ->scalar('content')
            ->requirePresence('content', 'create')
            ->notEmpty('content');

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
        $rules->add($rules->existsIn(['parent_id'], 'ParentSchemes'));
        $rules->add($rules->existsIn(['zone_id'], 'Zones'));
        $rules->add($rules->existsIn(['state_id'], 'States'));
        $rules->add($rules->existsIn(['district_id'], 'Districts'));

        return $rules;
    }
}
