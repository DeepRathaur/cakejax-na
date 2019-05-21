<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DistrictsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DistrictsTable Test Case
 */
class DistrictsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DistrictsTable
     */
    public $Districts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.districts',
        'app.zones',
        'app.states',
        'app.admins',
        'app.crop_insurance_offline_calculators',
        'app.customer_contact_details',
        'app.customer_land_hold_details',
        'app.customers',
        'app.schemes',
        'app.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Districts') ? [] : ['className' => DistrictsTable::class];
        $this->Districts = TableRegistry::get('Districts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Districts);

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
