<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * States Model
 *
 * @property \App\Model\Table\ZonesTable|\Cake\ORM\Association\BelongsTo $Zones
 * @property \App\Model\Table\AdminsTable|\Cake\ORM\Association\HasMany $Admins
 * @property \App\Model\Table\CropInsuranceOfflineCalculatorsTable|\Cake\ORM\Association\HasMany $CropInsuranceOfflineCalculators
 * @property \App\Model\Table\CustomerContactDetailsTable|\Cake\ORM\Association\HasMany $CustomerContactDetails
 * @property \App\Model\Table\CustomerLandHoldDetailsTable|\Cake\ORM\Association\HasMany $CustomerLandHoldDetails
 * @property \App\Model\Table\CustomersTable|\Cake\ORM\Association\HasMany $Customers
 * @property \App\Model\Table\DistrictsTable|\Cake\ORM\Association\HasMany $Districts
 * @property \App\Model\Table\RtoCityMastersTable|\Cake\ORM\Association\HasMany $RtoCityMasters
 * @property \App\Model\Table\SchemesTable|\Cake\ORM\Association\HasMany $Schemes
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\HasMany $Users
 *
 * @method \App\Model\Entity\State get($primaryKey, $options = [])
 * @method \App\Model\Entity\State newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\State[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\State|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\State patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\State[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\State findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class StatesTable extends Table
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

        $this->setTable('states');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Zones', [
            'foreignKey' => 'zone_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Admins', [
            'foreignKey' => 'state_id'
        ]);
        $this->hasMany('CropInsuranceOfflineCalculators', [
            'foreignKey' => 'state_id'
        ]);
        $this->hasMany('CustomerContactDetails', [
            'foreignKey' => 'state_id'
        ]);
        $this->hasMany('CustomerLandHoldDetails', [
            'foreignKey' => 'state_id'
        ]);
        $this->hasMany('Customers', [
            'foreignKey' => 'state_id'
        ]);
        $this->hasMany('Districts', [
            'foreignKey' => 'state_id'
        ]);
        $this->hasMany('RtoCityMasters', [
            'foreignKey' => 'state_id'
        ]);
        $this->hasMany('Schemes', [
            'foreignKey' => 'state_id'
        ]);
        $this->hasMany('Users', [
            'foreignKey' => 'state_id'
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
            ->scalar('state_name')
            ->maxLength('state_name', 11)
            ->requirePresence('state_name', 'create')
            ->notEmpty('state_name');

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
        $rules->add($rules->existsIn(['zone_id'], 'Zones'));

        return $rules;
    }
}
