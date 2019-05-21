<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RegionalLanguagesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RegionalLanguagesTable Test Case
 */
class RegionalLanguagesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RegionalLanguagesTable
     */
    public $RegionalLanguages;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.regional_languages'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('RegionalLanguages') ? [] : ['className' => RegionalLanguagesTable::class];
        $this->RegionalLanguages = TableRegistry::get('RegionalLanguages', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->RegionalLanguages);

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
