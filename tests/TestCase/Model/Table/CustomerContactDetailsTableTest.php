<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CustomerContactDetailsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CustomerContactDetailsTable Test Case
 */
class CustomerContactDetailsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CustomerContactDetailsTable
     */
    public $CustomerContactDetails;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.customer_contact_details',
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
        $config = TableRegistry::exists('CustomerContactDetails') ? [] : ['className' => CustomerContactDetailsTable::class];
        $this->CustomerContactDetails = TableRegistry::get('CustomerContactDetails', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CustomerContactDetails);

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
