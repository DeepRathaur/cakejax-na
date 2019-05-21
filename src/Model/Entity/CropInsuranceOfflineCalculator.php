<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CropInsuranceOfflineCalculator Entity
 *
 * @property int $id
 * @property int $state_id
 * @property int $district_id
 * @property int $season_id
 * @property int $crop_id
 * @property int $sum_insured_amount
 * @property float $insurance_company_amount
 * @property float $farmer_payable_amount
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\State $state
 * @property \App\Model\Entity\District $district
 * @property \App\Model\Entity\CroppingSeason $cropping_season
 * @property \App\Model\Entity\CropMaster $crop_master
 */
class CropInsuranceOfflineCalculator extends Entity
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
        'state_id' => true,
        'district_id' => true,
        'season_id' => true,
        'crop_id' => true,
        'sum_insured_amount' => true,
        'insurance_company_amount' => true,
        'farmer_payable_amount' => true,
        'created' => true,
        'modified' => true,
        'state' => true,
        'district' => true,
        'cropping_season' => true,
        'crop_master' => true
    ];
}
