<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FuelTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FuelTypesTable Test Case
 */
class FuelTypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FuelTypesTable
     */
    public $FuelTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.fuel_types'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('FuelTypes') ? [] : ['className' => FuelTypesTable::class];
        $this->FuelTypes = TableRegistry::get('FuelTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->FuelTypes);

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
