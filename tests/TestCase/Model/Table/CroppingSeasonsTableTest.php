<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CroppingSeasonsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CroppingSeasonsTable Test Case
 */
class CroppingSeasonsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CroppingSeasonsTable
     */
    public $CroppingSeasons;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.cropping_seasons'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('CroppingSeasons') ? [] : ['className' => CroppingSeasonsTable::class];
        $this->CroppingSeasons = TableRegistry::get('CroppingSeasons', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CroppingSeasons);

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
