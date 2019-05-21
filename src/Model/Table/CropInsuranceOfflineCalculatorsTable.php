<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CropInsuranceOfflineCalculators Model
 *
 * @property \App\Model\Table\StatesTable|\Cake\ORM\Association\BelongsTo $States
 * @property \App\Model\Table\DistrictsTable|\Cake\ORM\Association\BelongsTo $Districts
 * @property \App\Model\Table\CroppingSeasonsTable|\Cake\ORM\Association\BelongsTo $CroppingSeasons
 * @property \App\Model\Table\CropMastersTable|\Cake\ORM\Association\BelongsTo $CropMasters
 *
 * @method \App\Model\Entity\CropInsuranceOfflineCalculator get($primaryKey, $options = [])
 * @method \App\Model\Entity\CropInsuranceOfflineCalculator newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CropInsuranceOfflineCalculator[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CropInsuranceOfflineCalculator|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CropInsuranceOfflineCalculator patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CropInsuranceOfflineCalculator[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CropInsuranceOfflineCalculator findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CropInsuranceOfflineCalculatorsTable extends Table
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

        $this->setTable('crop_insurance_offline_calculators');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('States', [
            'foreignKey' => 'state_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Districts', [
            'foreignKey' => 'district_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('CroppingSeasons', [
            'foreignKey' => 'season_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('CropMasters', [
            'foreignKey' => 'crop_id',
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
            ->requirePresence('sum_insured_amount', 'create')
            ->notEmpty('sum_insured_amount');

        $validator
            ->decimal('insurance_company_amount')
            ->requirePresence('insurance_company_amount', 'create')
            ->notEmpty('insurance_company_amount');

        $validator
            ->decimal('farmer_payable_amount')
            ->requirePresence('farmer_payable_amount', 'create')
            ->notEmpty('farmer_payable_amount');

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
        $rules->add($rules->existsIn(['district_id'], 'Districts'));
        $rules->add($rules->existsIn(['season_id'], 'CroppingSeasons'));
        $rules->add($rules->existsIn(['crop_id'], 'CropMasters'));

        return $rules;
    }
}
