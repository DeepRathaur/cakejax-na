<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RtoStateMastersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RtoStateMastersTable Test Case
 */
class RtoStateMastersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RtoStateMastersTable
     */
    public $RtoStateMasters;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.rto_state_masters'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('RtoStateMasters') ? [] : ['className' => RtoStateMastersTable::class];
        $this->RtoStateMasters = TableRegistry::get('RtoStateMasters', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->RtoStateMasters);

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
