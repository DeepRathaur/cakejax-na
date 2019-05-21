<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CustomerVhicleDetailsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CustomerVhicleDetailsTable Test Case
 */
class CustomerVhicleDetailsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CustomerVhicleDetailsTable
     */
    public $CustomerVhicleDetails;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.customer_vhicle_details'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('CustomerVhicleDetails') ? [] : ['className' => CustomerVhicleDetailsTable::class];
        $this->CustomerVhicleDetails = TableRegistry::get('CustomerVhicleDetails', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CustomerVhicleDetails);

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
}
