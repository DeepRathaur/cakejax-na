<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FuelTypes Model
 *
 * @method \App\Model\Entity\FuelType get($primaryKey, $options = [])
 * @method \App\Model\Entity\FuelType newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\FuelType[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\FuelType|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FuelType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\FuelType[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\FuelType findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class FuelTypesTable extends Table
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

        $this->setTable('fuel_types');
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
            ->scalar('fuel_type_desc')
            ->maxLength('fuel_type_desc', 255)
            ->requirePresence('fuel_type_desc', 'create')
            ->notEmpty('fuel_type_desc');

        $validator
            ->scalar('fuel_type_code')
            ->maxLength('fuel_type_code', 255)
            ->requirePresence('fuel_type_code', 'create')
            ->notEmpty('fuel_type_code');

        return $validator;
    }
}
