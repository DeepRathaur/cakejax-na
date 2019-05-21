<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CustomerCropField Entity
 *
 * @property int $id
 * @property int $customer_id
 * @property string $login_id
 * @property string $farmer_classification
 * @property string $identity_type
 * @property string $identity_no
 * @property string $farmer_category
 * @property string $farmer_religion
 * @property string $farmer_community
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Customer $customer
 * @property \App\Model\Entity\Login $login
 */
class CustomerCropField extends Entity
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
        'customer_id' => true,
        'login_id' => true,
        'farmer_classification' => true,
        'identity_type' => true,
        'identity_no' => true,
        'farmer_category' => true,
        'farmer_religion' => true,
        'farmer_community' => true,
        'created' => true,
        'modified' => true,
        'customer' => true,
        'login' => true
    ];
}
