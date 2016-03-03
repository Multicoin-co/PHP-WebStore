<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProductSubtypeTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProductSubtypeTable Test Case
 */
class ProductSubtypeTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProductSubtypeTable
     */
    public $ProductSubtype;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.product_subtype'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ProductSubtype') ? [] : ['className' => 'App\Model\Table\ProductSubtypeTable'];
        $this->ProductSubtype = TableRegistry::get('ProductSubtype', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProductSubtype);

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
