<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Scheme Entity
 *
 * @property int $id
 * @property int $parent_id
 * @property int $zone_id
 * @property int $state_id
 * @property int $district_id
 * @property string $scheme_name
 * @property \Cake\I18n\FrozenTime $date_from
 * @property \Cake\I18n\FrozenTime $date_to
 * @property string $insurance_type
 * @property int $commission
 * @property int $target_amount
 * @property string $content
 * @property bool $status
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\ParentScheme $parent_scheme
 * @property \App\Model\Entity\Zone $zone
 * @property \App\Model\Entity\State $state
 * @property \App\Model\Entity\District $district
 * @property \App\Model\Entity\ChildScheme[] $child_schemes
 */
class Scheme extends Entity
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
        'parent_id' => true,
        'zone_id' => true,
        'state_id' => true,
        'district_id' => true,
        'scheme_name' => true,
        'date_from' => true,
        'date_to' => true,
        'insurance_type' => true,
        'commission' => true,
        'target_amount' => true,
        'content' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'parent_scheme' => true,
        'zone' => true,
        'state' => true,
        'district' => true,
        'child_schemes' => true
    ];
}
