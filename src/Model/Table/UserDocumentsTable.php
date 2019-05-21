<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UserDocuments Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\UserDocument get($primaryKey, $options = [])
 * @method \App\Model\Entity\UserDocument newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\UserDocument[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\UserDocument|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UserDocument patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\UserDocument[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\UserDocument findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UserDocumentsTable extends Table
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

        $this->setTable('user_documents');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
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
            ->scalar('user_documents')
            ->maxLength('user_documents', 200)
            ->requirePresence('user_documents', 'create')
            ->notEmpty('user_documents');

        $validator
            ->scalar('address_proof')
            ->maxLength('address_proof', 200)
            ->requirePresence('address_proof', 'create')
            ->notEmpty('address_proof');

        $validator
            ->scalar('id_proof')
            ->maxLength('id_proof', 200)
            ->requirePresence('id_proof', 'create')
            ->notEmpty('id_proof');

        $validator
            ->scalar('certificate')
            ->maxLength('certificate', 200)
            ->requirePresence('certificate', 'create')
            ->notEmpty('certificate');

        $validator
            ->scalar('educational_certificate')
            ->maxLength('educational_certificate', 200)
            ->requirePresence('educational_certificate', 'create')
            ->notEmpty('educational_certificate');

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
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
