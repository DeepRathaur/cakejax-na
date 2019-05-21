<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CustomerLandHoldDetail Entity
 *
 * @property int $id
 * @property int $customer_id
 * @property string $login_id
 * @property int $surveyno1
 * @property int $surveyno2
 * @property string $extentofland
 * @property string $city
 * @property string $block
 * @property int $state_id
 * @property int $district_id
 * @property int $pin_code
 * @property string $extentofland2
 * @property string $city2
 * @property string $block2
 * @property int $state_id2
 * @property int $district_id2
 * @property int $pin_code2
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Customer $customer
 * @property \App\Model\Entity\Login $login
 * @property \App\Model\Entity\State $state
 * @property \App\Model\Entity\District $district
 */
class CustomerLandHoldDetail extends Entity
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
        'surveyno1' => true,
        'surveyno2' => true,
        'extentofland' => true,
        'city' => true,
        'block' => true,
        'state_id' => true,
        'district_id' => true,
        'pin_code' => true,
        'extentofland2' => true,
        'city2' => true,
        'block2' => true,
        'state_id2' => true,
        'district_id2' => true,
        'pin_code2' => true,
        'created' => true,
        'modified' => true,
        'customer' => true,
        'login' => true,
        'state' => true,
        'district' => true
    ];
}
