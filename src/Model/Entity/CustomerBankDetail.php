<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CustomerBankDetail Entity
 *
 * @property int $id
 * @property int $customer_id
 * @property string $login_id
 * @property string $account_holder_name
 * @property string $bank_name
 * @property string $branch_name
 * @property string $ifs_code
 * @property string $branch_address
 * @property string $account_type
 * @property string $account_no
 * @property string $bank_phone_no
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Customer $customer
 * @property \App\Model\Entity\Login $login
 */
class CustomerBankDetail extends Entity
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
        'account_holder_name' => true,
        'bank_name' => true,
        'branch_name' => true,
        'ifs_code' => true,
        'branch_address' => true,
        'account_type' => true,
        'account_no' => true,
        'bank_phone_no' => true,
        'created' => true,
        'modified' => true,
        'customer' => true,
        'login' => true
    ];
}
