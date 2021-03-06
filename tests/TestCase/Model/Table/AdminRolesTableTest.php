<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AdminRolesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AdminRolesTable Test Case
 */
class AdminRolesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AdminRolesTable
     */
    public $AdminRoles;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.admin_roles',
        'app.admins',
        'app.roles'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('AdminRoles') ? [] : ['className' => AdminRolesTable::class];
        $this->AdminRoles = TableRegistry::get('AdminRoles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AdminRoles);

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
