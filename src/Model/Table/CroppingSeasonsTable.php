<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CroppingSeasons Model
 *
 * @method \App\Model\Entity\CroppingSeason get($primaryKey, $options = [])
 * @method \App\Model\Entity\CroppingSeason newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CroppingSeason[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CroppingSeason|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CroppingSeason patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CroppingSeason[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CroppingSeason findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CroppingSeasonsTable extends Table
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

        $this->setTable('cropping_seasons');
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
            ->scalar('season_name')
            ->maxLength('season_name', 255)
            ->requirePresence('season_name', 'create')
            ->notEmpty('season_name');

        return $validator;
    }
}
