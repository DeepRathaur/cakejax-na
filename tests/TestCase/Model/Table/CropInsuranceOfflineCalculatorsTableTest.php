<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CropInsuranceOfflineCalculatorsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CropInsuranceOfflineCalculatorsTable Test Case
 */
class CropInsuranceOfflineCalculatorsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CropInsuranceOfflineCalculatorsTable
     */
    public $CropInsuranceOfflineCalculators;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.crop_insurance_offline_calculators',
        'app.states',
        'app.districts',
        'app.cropping_seasons',
        'app.crop_masters'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('CropInsuranceOfflineCalculators') ? [] : ['className' => CropInsuranceOfflineCalculatorsTable::class];
        $this->CropInsuranceOfflineCalculators = TableRegistry::get('CropInsuranceOfflineCalculators', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CropInsuranceOfflineCalculators);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
