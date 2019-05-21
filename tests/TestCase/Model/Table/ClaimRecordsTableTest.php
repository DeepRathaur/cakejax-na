<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ClaimRecordsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ClaimRecordsTable Test Case
 */
class ClaimRecordsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ClaimRecordsTable
     */
    public $ClaimRecords;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.claim_records'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ClaimRecords') ? [] : ['className' => ClaimRecordsTable::class];
        $this->ClaimRecords = TableRegistry::get('ClaimRecords', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ClaimRecords);

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
