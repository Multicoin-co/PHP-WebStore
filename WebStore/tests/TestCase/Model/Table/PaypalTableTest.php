<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PaypalTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PaypalTable Test Case
 */
class PaypalTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PaypalTable
     */
    public $Paypal;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.paypal'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Paypal') ? [] : ['className' => 'App\Model\Table\PaypalTable'];
        $this->Paypal = TableRegistry::get('Paypal', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Paypal);

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
