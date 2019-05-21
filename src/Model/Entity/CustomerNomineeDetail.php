<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CustomerNomineeDetail Entity
 *
 * @property int $id
 * @property int $customer_id
 * @property string $login_id
 * @property string $nominee_title
 * @property string $nominee_fname
 * @property string $nominee_mname
 * @property string $nominee_lname
 * @property string $relation
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Customer $customer
 * @property \App\Model\Entity\Login $login
 */
class CustomerNomineeDetail extends Entity
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
        'nominee_title' => true,
        'nominee_fname' => true,
        'nominee_mname' => true,
        'nominee_lname' => true,
        'relation' => true,
        'created' => true,
        'modified' => true,
        'customer' => true,
        'login' => true
    ];
}
