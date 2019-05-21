<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Admin Entity
 *
 * @property int $id
 * @property string $login_id
 * @property int $parent_id
 * @property int $role_id
 * @property int $zone_id
 * @property int $state_id
 * @property int $district_id
 * @property string $employee_id
 * @property string $name
 * @property int $aadhar_card
 * @property string $pan_card
 * @property string $father_name
 * @property string $dob
 * @property string $gender
 * @property string $mobile_no
 * @property string $education
 * @property string $address
 * @property string $email
 * @property string $password
 * @property string $profile_picture
 * @property bool $status
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Login $login
 * @property \App\Model\Entity\ParentAdmin $parent_admin
 * @property \App\Model\Entity\Role $role
 * @property \App\Model\Entity\Zone $zone
 * @property \App\Model\Entity\State $state
 * @property \App\Model\Entity\District $district
 * @property \App\Model\Entity\Employee $employee
 * @property \App\Model\Entity\AdminRole[] $admin_roles
 * @property \App\Model\Entity\ChildAdmin[] $child_admins
 */
class Admin extends Entity
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
        'login_id' => true,
        'parent_id' => true,
        'role_id' => true,
        'zone_id' => true,
        'state_id' => true,
        'district_id' => true,
        'employee_id' => true,
        'name' => true,
        'aadhar_card' => true,
        'pan_card' => true,
        'father_name' => true,
        'dob' => true,
        'gender' => true,
        'mobile_no' => true,
        'education' => true,
        'address' => true,
        'email' => true,
        'password' => true,
        'profile_picture' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'login' => true,
        'parent_admin' => true,
        'role' => true,
        'zone' => true,
        'state' => true,
        'district' => true,
        'employee' => true,
        'admin_roles' => true,
        'child_admins' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
