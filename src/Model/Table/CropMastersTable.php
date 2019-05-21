<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CropMasters Model
 *
 * @property \App\Model\Table\CroppingSeasonsTable|\Cake\ORM\Association\BelongsTo $CroppingSeasons
 *
 * @method \App\Model\Entity\CropMaster get($primaryKey, $options = [])
 * @method \App\Model\Entity\CropMaster newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CropMaster[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CropMaster|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CropMaster patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CropMaster[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CropMaster findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CropMastersTable extends Table
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

        $this->setTable('crop_masters');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('CroppingSeasons', [
            'foreignKey' => 'season_id',
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
            ->scalar('crop_name')
            ->maxLength('crop_name', 255)
            ->requirePresence('crop_name', 'create')
            ->notEmpty('crop_name');

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
        $rules->add($rules->existsIn(['season_id'], 'CroppingSeasons'));

        return $rules;
    }
}
