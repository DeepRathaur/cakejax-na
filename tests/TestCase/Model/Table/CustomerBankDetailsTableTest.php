<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CustomerBankDetailsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CustomerBankDetailsTable Test Case
 */
class CustomerBankDetailsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CustomerBankDetailsTable
     */
    public $CustomerBankDetails;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.customer_bank_details',
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
        $config = TableRegistry::exists('CustomerBankDetails') ? [] : ['className' => CustomerBankDetailsTable::class];
        $this->CustomerBankDetails = TableRegistry::get('CustomerBankDetails', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CustomerBankDetails);

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
