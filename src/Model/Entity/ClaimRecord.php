<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ClaimRecord Entity
 *
 * @property int $id
 * @property string $policy_no
 * @property string $message
 * @property string $mobile_no
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class ClaimRecord extends Entity
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
        'policy_no' => true,
        'message' => true,
        'mobile_no' => true,
        'created' => true,
        'modified' => true
    ];
}
