<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CustomerContactDetail Entity
 *
 * @property int $id
 * @property int $customer_id
 * @property string $login_id
 * @property string $address1
 * @property string $address2
 * @property string $phone_no
 * @property string $mobile_no
 * @property string $post_office
 * @property int $fax_no
 * @property string $city
 * @property int $state_id
 * @property int $district_id
 * @property string $email
 * @property int $pin_code
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Customer $customer
 * @property \App\Model\Entity\Login $login
 * @property \App\Model\Entity\State $state
 * @property \App\Model\Entity\District $district
 */
class CustomerContactDetail extends Entity
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
        'address1' => true,
        'address2' => true,
        'phone_no' => true,
        'mobile_no' => true,
        'post_office' => true,
        'fax_no' => true,
        'city' => true,
        'state_id' => true,
        'district_id' => true,
        'email' => true,
        'pin_code' => true,
        'created' => true,
        'modified' => true,
        'customer' => true,
        'login' => true,
        'state' => true,
        'district' => true
    ];
}
