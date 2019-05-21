<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CustomerNomineeDetailsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CustomerNomineeDetailsTable Test Case
 */
class CustomerNomineeDetailsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CustomerNomineeDetailsTable
     */
    public $CustomerNomineeDetails;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.customer_nominee_details',
        'app.customers',
        'app.logins'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('CustomerNomineeDetails') ? [] : ['className' => CustomerNomineeDetailsTable::class];
        $this->CustomerNomineeDetails = TableRegistry::get('CustomerNomineeDetails', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CustomerNomineeDetails);

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
