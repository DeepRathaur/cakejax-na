<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Zone Entity
 *
 * @property int $id
 * @property string $zone_name
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Admin[] $admins
 * @property \App\Model\Entity\Customer[] $customers
 * @property \App\Model\Entity\District[] $districts
 * @property \App\Model\Entity\Scheme[] $schemes
 * @property \App\Model\Entity\State[] $states
 * @property \App\Model\Entity\User[] $users
 */
class Zone extends Entity
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
        'zone_name' => true,
        'created' => true,
        'modified' => true,
        'admins' => true,
        'customers' => true,
        'districts' => true,
        'schemes' => true,
        'states' => true,
        'users' => true
    ];
}
