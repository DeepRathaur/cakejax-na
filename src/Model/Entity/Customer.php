<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Customer Entity
 *
 * @property int $id
 * @property string $login_id
 * @property int $parent_id
 * @property int $zone_id
 * @property int $state_id
 * @property int $district_id
 * @property string $title
 * @property string $fname
 * @property string $mname
 * @property string $lname
 * @property int $aadhar_card
 * @property string $pan_card
 * @property string $father_name
 * @property string $dob
 * @property string $gender
 * @property string $mobile_no
 * @property string $occupation
 * @property string $address
 * @property string $email
 * @property string $password
 * @property string $profile_picture
 * @property string $uuid
 * @property string $remarks
 * @property bool $status
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Login $login
 * @property \App\Model\Entity\ParentCustomer $parent_customer
 * @property \App\Model\Entity\Zone $zone
 * @property \App\Model\Entity\State $state
 * @property \App\Model\Entity\District $district
 * @property \App\Model\Entity\CustomerBankDetail[] $customer_bank_details
 * @property \App\Model\Entity\CustomerContactDetail[] $customer_contact_details
 * @property \App\Model\Entity\CustomerCropField[] $customer_crop_fields
 * @property \App\Model\Entity\CustomerDocument[] $customer_documents
 * @property \App\Model\Entity\CustomerInsuranceType[] $customer_insurance_types
 * @property \App\Model\Entity\CustomerLandHoldDetail[] $customer_land_hold_details
 * @property \App\Model\Entity\CustomerNomineeDetail[] $customer_nominee_details
 * @property \App\Model\Entity\ChildCustomer[] $child_customers
 */
class Customer extends Entity
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
        'zone_id' => true,
        'state_id' => true,
        'district_id' => true,
        'title' => true,
        'fname' => true,
        'mname' => true,
        'lname' => true,
        'aadhar_card' => true,
        'pan_card' => true,
        'father_name' => true,
        'dob' => true,
        'gender' => true,
        'mobile_no' => true,
        'occupation' => true,
        'address' => true,
        'email' => true,
        'password' => true,
        'profile_picture' => true,
        'uuid' => true,
        'remarks' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'login' => true,
        'parent_customer' => true,
        'zone' => true,
        'state' => true,
        'district' => true,
        'customer_bank_details' => true,
        'customer_contact_details' => true,
        'customer_crop_fields' => true,
        'customer_documents' => true,
        'customer_insurance_types' => true,
        'customer_land_hold_details' => true,
        'customer_nominee_details' => true,
        'child_customers' => true
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
