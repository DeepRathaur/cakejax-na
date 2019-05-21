<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * District Entity
 *
 * @property int $id
 * @property int $zone_id
 * @property int $state_id
 * @property string $district_name
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Zone $zone
 * @property \App\Model\Entity\State $state
 * @property \App\Model\Entity\Admin[] $admins
 * @property \App\Model\Entity\CropInsuranceOfflineCalculator[] $crop_insurance_offline_calculators
 * @property \App\Model\Entity\CustomerContactDetail[] $customer_contact_details
 * @property \App\Model\Entity\CustomerLandHoldDetail[] $customer_land_hold_details
 * @property \App\Model\Entity\Customer[] $customers
 * @property \App\Model\Entity\Scheme[] $schemes
 * @property \App\Model\Entity\User[] $users
 */
class District extends Entity
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
        'zone_id' => true,
        'state_id' => true,
        'district_name' => true,
        'created' => true,
        'modified' => true,
        'zone' => true,
        'state' => true,
        'admins' => true,
        'crop_insurance_offline_calculators' => true,
        'customer_contact_details' => true,
        'customer_land_hold_details' => true,
        'customers' => true,
        'schemes' => true,
        'users' => true
    ];
}
