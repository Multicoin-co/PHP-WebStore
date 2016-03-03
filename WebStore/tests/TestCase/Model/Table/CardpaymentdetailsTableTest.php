<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CardpaymentdetailsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CardpaymentdetailsTable Test Case
 */
class CardpaymentdetailsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CardpaymentdetailsTable
     */
    public $Cardpaymentdetails;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.cardpaymentdetails'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Cardpaymentdetails') ? [] : ['className' => 'App\Model\Table\CardpaymentdetailsTable'];
        $this->Cardpaymentdetails = TableRegistry::get('Cardpaymentdetails', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Cardpaymentdetails);

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
