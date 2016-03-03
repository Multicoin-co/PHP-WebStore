<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PaymentInfoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PaymentInfoTable Test Case
 */
class PaymentInfoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PaymentInfoTable
     */
    public $PaymentInfo;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.payment_info',
        'app.order',
        'app.users',
        'app.address',
        'app.order_items',
        'app.product',
        'app.payments'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PaymentInfo') ? [] : ['className' => 'App\Model\Table\PaymentInfoTable'];
        $this->PaymentInfo = TableRegistry::get('PaymentInfo', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PaymentInfo);

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
