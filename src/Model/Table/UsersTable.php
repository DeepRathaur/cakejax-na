<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \App\Model\Table\LoginsTable|\Cake\ORM\Association\BelongsTo $Logins
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $ParentUsers
 * @property \App\Model\Table\ZonesTable|\Cake\ORM\Association\BelongsTo $Zones
 * @property \App\Model\Table\StatesTable|\Cake\ORM\Association\BelongsTo $States
 * @property \App\Model\Table\DistrictsTable|\Cake\ORM\Association\BelongsTo $Districts
 * @property \App\Model\Table\UserDocumentsTable|\Cake\ORM\Association\HasMany $UserDocuments
 * @property \App\Model\Table\UserLanguagesTable|\Cake\ORM\Association\HasMany $UserLanguages
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\HasMany $ChildUsers
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UsersTable extends Table
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

        $this->setTable('users');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Logins', [
            'foreignKey' => 'login_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('ParentUsers', [
            'className' => 'Users',
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
        $this->hasMany('UserDocuments', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('UserLanguages', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('ChildUsers', [
            'className' => 'Users',
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
            ->scalar('name')
            ->maxLength('name', 100)
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->requirePresence('aadhar_card', 'create')
            ->notEmpty('aadhar_card');

        $validator
            ->scalar('pan_card')
            ->maxLength('pan_card', 100)
            ->requirePresence('pan_card', 'create')
            ->notEmpty('pan_card');

        $validator
            ->scalar('father_name')
            ->maxLength('father_name', 100)
            ->requirePresence('father_name', 'create')
            ->notEmpty('father_name');

        $validator
            ->scalar('dob')
            ->maxLength('dob', 100)
            ->requirePresence('dob', 'create')
            ->notEmpty('dob');

        $validator
            ->scalar('gender')
            ->maxLength('gender', 50)
            ->requirePresence('gender', 'create')
            ->notEmpty('gender');

        $validator
            ->scalar('mobile_no')
            ->maxLength('mobile_no', 255)
            ->requirePresence('mobile_no', 'create')
            ->notEmpty('mobile_no');

        $validator
            ->scalar('education')
            ->maxLength('education', 100)
            ->requirePresence('education', 'create')
            ->notEmpty('education');

        $validator
            ->scalar('address')
            ->requirePresence('address', 'create')
            ->notEmpty('address');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        $validator
            ->scalar('password')
            ->maxLength('password', 255)
            ->requirePresence('password', 'create')
            ->notEmpty('password');

        $validator
            ->scalar('profile_picture')
            ->maxLength('profile_picture', 255)
            ->requirePresence('profile_picture', 'create')
            ->notEmpty('profile_picture');

        $validator
            ->integer('crop_commission')
            ->requirePresence('crop_commission', 'create')
            ->notEmpty('crop_commission');

        $validator
            ->integer('health_commission')
            ->requirePresence('health_commission', 'create')
            ->notEmpty('health_commission');

        $validator
            ->integer('motor_commission')
            ->requirePresence('motor_commission', 'create')
            ->notEmpty('motor_commission');

        $validator
            ->scalar('reset_password_token')
            ->maxLength('reset_password_token', 255)
            ->requirePresence('reset_password_token', 'create')
            ->notEmpty('reset_password_token');

        $validator
            ->dateTime('token_created_at')
            ->requirePresence('token_created_at', 'create')
            ->notEmpty('token_created_at');

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
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['login_id'], 'Logins'));
        $rules->add($rules->existsIn(['parent_id'], 'ParentUsers'));
        $rules->add($rules->existsIn(['zone_id'], 'Zones'));
        $rules->add($rules->existsIn(['state_id'], 'States'));
        $rules->add($rules->existsIn(['district_id'], 'Districts'));

        return $rules;
    }
}
