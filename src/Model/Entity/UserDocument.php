<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UserDocument Entity
 *
 * @property int $id
 * @property int $user_id
 * @property string $user_documents
 * @property string $address_proof
 * @property string $id_proof
 * @property string $certificate
 * @property string $educational_certificate
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\User $user
 */
class UserDocument extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'user_id' => true,
        'user_documents' => true,
        'address_proof' => true,
        'id_proof' => true,
        'certificate' => true,
        'educational_certificate' => true,
        'created' => true,
        'modified' => true,
        'user' => true
    ];
}
