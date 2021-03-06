<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserLanguagesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserLanguagesTable Test Case
 */
class UserLanguagesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UserLanguagesTable
     */
    public $UserLanguages;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.user_languages',
        'app.users',
        'app.languages'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('UserLanguages') ? [] : ['className' => UserLanguagesTable::class];
        $this->UserLanguages = TableRegistry::get('UserLanguages', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UserLanguages);

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
