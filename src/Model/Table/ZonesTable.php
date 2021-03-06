<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Zones Model
 *
 * @property \App\Model\Table\AdminsTable|\Cake\ORM\Association\HasMany $Admins
 * @property \App\Model\Table\CustomersTable|\Cake\ORM\Association\HasMany $Customers
 * @property \App\Model\Table\DistrictsTable|\Cake\ORM\Association\HasMany $Districts
 * @property \App\Model\Table\SchemesTable|\Cake\ORM\Association\HasMany $Schemes
 * @property \App\Model\Table\StatesTable|\Cake\ORM\Association\HasMany $States
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\HasMany $Users
 *
 * @method \App\Model\Entity\Zone get($primaryKey, $options = [])
 * @method \App\Model\Entity\Zone newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Zone[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Zone|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Zone patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Zone[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Zone findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ZonesTable extends Table
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

        $this->setTable('zones');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Admins', [
            'foreignKey' => 'zone_id'
        ]);
        $this->hasMany('Customers', [
            'foreignKey' => 'zone_id'
        ]);
        $this->hasMany('Districts', [
            'foreignKey' => 'zone_id'
        ]);
        $this->hasMany('Schemes', [
            'foreignKey' => 'zone_id'
        ]);
        $this->hasMany('States', [
            'foreignKey' => 'zone_id'
        ]);
        $this->hasMany('Users', [
            'foreignKey' => 'zone_id'
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
            ->scalar('zone_name')
            ->maxLength('zone_name', 255)
            ->requirePresence('zone_name', 'create')
            ->notEmpty('zone_name');

        return $validator;
    }
}
