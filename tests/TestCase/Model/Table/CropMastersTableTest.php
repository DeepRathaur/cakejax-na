<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CropMastersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CropMastersTable Test Case
 */
class CropMastersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CropMastersTable
     */
    public $CropMasters;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.crop_masters',
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
        $config = TableRegistry::exists('CropMasters') ? [] : ['className' => CropMastersTable::class];
        $this->CropMasters = TableRegistry::get('CropMasters', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CropMasters);

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
