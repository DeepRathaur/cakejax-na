<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CustomerInsuranceTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CustomerInsuranceTypesTable Test Case
 */
class CustomerInsuranceTypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CustomerInsuranceTypesTable
     */
    public $CustomerInsuranceTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.customer_insurance_types',
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
        $config = TableRegistry::exists('CustomerInsuranceTypes') ? [] : ['className' => CustomerInsuranceTypesTable::class];
        $this->CustomerInsuranceTypes = TableRegistry::get('CustomerInsuranceTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CustomerInsuranceTypes);

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
