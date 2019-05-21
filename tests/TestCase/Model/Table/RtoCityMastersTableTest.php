<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RtoCityMastersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RtoCityMastersTable Test Case
 */
class RtoCityMastersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RtoCityMastersTable
     */
    public $RtoCityMasters;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.rto_city_masters',
        'app.states'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('RtoCityMasters') ? [] : ['className' => RtoCityMastersTable::class];
        $this->RtoCityMasters = TableRegistry::get('RtoCityMasters', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->RtoCityMasters);

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
