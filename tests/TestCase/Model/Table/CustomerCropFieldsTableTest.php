<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CustomerCropFieldsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CustomerCropFieldsTable Test Case
 */
class CustomerCropFieldsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CustomerCropFieldsTable
     */
    public $CustomerCropFields;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.customer_crop_fields',
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
        $config = TableRegistry::exists('CustomerCropFields') ? [] : ['className' => CustomerCropFieldsTable::class];
        $this->CustomerCropFields = TableRegistry::get('CustomerCropFields', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CustomerCropFields);

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
