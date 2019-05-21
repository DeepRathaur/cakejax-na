<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CustomerLandHoldDetailsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CustomerLandHoldDetailsTable Test Case
 */
class CustomerLandHoldDetailsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CustomerLandHoldDetailsTable
     */
    public $CustomerLandHoldDetails;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.customer_land_hold_details',
        'app.customers',
        'app.logins',
        'app.states',
        'app.districts'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('CustomerLandHoldDetails') ? [] : ['className' => CustomerLandHoldDetailsTable::class];
        $this->CustomerLandHoldDetails = TableRegistry::get('CustomerLandHoldDetails', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CustomerLandHoldDetails);

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
