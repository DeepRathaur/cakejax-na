<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * RtoCityMaster Entity
 *
 * @property int $id
 * @property string $city_name
 * @property int $state_id
 * @property string $region_code
 * @property string $alias_region_code
 * @property string $name
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\State $state
 */
class RtoCityMaster extends Entity
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
        'city_name' => true,
        'state_id' => true,
        'region_code' => true,
        'alias_region_code' => true,
        'name' => true,
        'created' => true,
        'modified' => true,
        'state' => true
    ];
}
