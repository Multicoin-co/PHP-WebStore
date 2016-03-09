<?php
namespace App\Test\TestCase\Controller;

use App\Controller\ProductController;
use Cake\TestSuite\IntegrationTestCase;
use Cake\ORM\TableRegistry;

/**
 * App\Controller\ProductController Test Case
 */
class ProductControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.product',
        'app.order_items',
        'app.order',
        'app.users',
        'app.address',
        'app.product_images',
	'app.product_subtype',
	'app.product_type',

    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
	// Check the main page
	$this->get('/admin/product/all');
	$this->assertResponseOk();
	$this->assertResponseContains('Product');
	$this->assertLayout('default');
	$this->assertTemplate('index');

	// We need pagination so test it
	$this->get('/admin/product/all?page=1');
	$this->assertResponseOk();
	$this->assertResponseContains('Product');

	// Second page should 404 because there isnt enough data
	$this->get('/admin/product/all?page=2');
	$this->assertResponseError();
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
	$this->get('/admin/product/view/1');
	$this->assertResponseOk();
	$this->assertResponseContains('Product');
	$this->assertLayout('default');
	$this->assertTemplate('view');

	// We dont want users to be able to see the products admin page
	$this->get('/product/view/1');
	$this->assertResponseError();

    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
	$product_table = TableRegistry::get('Product');
    	$this->enableCsrfToken();
    	$this->enableSecurityToken();

	// Arrays of different data sent to the servers to test different scenarios
	$data_item_ok      	   = ['fkproductsubtypeid' => 1,    'name' => 'testAdd1',  'description' => '',   'manufacturer' => 'UnitTests', 'price' => 100.00, 'stock' => 0];
	$data_item_no_id   	   = ['fkproductsubtypeid' => null, 'name' => 'testAdd2',  'description' => '',   'manufacturer' => 'UnitTests', 'price' => 100.00, 'stock' => 0];
	$data_item_no_name     	   = ['fkproductsubtypeid' => 1,    'name' => null,        'description' => '',   'manufacturer' => 'UnitTests', 'price' => 100.00, 'stock' => 0];
	$data_item_no_desc 	   = ['fkproductsubtypeid' => 1,    'name' => 'testAdd4',  'description' => null, 'manufacturer' => 'UnitTests', 'price' => 100.00, 'stock' => 0];
	$data_item_no_manufacturer = ['fkproductsubtypeid' => 1,    'name' => 'testAdd5',  'description' => '',   'manufacturer' => null,        'price' => 100.00, 'stock' => 0];
	$data_item_no_price 	   = ['fkproductsubtypeid' => 1,    'name' => 'testAdd6',  'description' => '',   'manufacturer' => 'UnitTests', 'price' => null,   'stock' => 0];
	$data_item_no_stock 	   = ['fkproductsubtypeid' => 1,    'name' => 'testAdd7',  'description' => '',   'manufacturer' => 'UnitTests', 'price' => 100.00, 'stock' => null];
	$data_item_negative_id 	   = ['fkproductsubtypeid' => -1,   'name' => 'testAdd8',  'description' => '',   'manufacturer' => 'UnitTests', 'price' => 100.00, 'stock' => 0];
	$data_item_false_id        = ['fkproductsubtypeid' => 5,    'name' => 'testAdd9',  'description' => '',   'manufacturer' => 'UnitTests', 'price' => 100.00, 'stock' => 0];
	$data_item_invalid_price   = ['fkproductsubtypeid' => 1,    'name' => 'testAdd10', 'description' => '',   'manufacturer' => 'UnitTests', 'price' => -10.00, 'stock' => 0];
	$date_item_invalid_stock   = ['fkproductsubtypeid' => 1,    'name' => 'testAdd11', 'description' => '',   'manufacturer' => 'UnitTests', 'price' => 100.00, 'stock' => -1];


	// First test valid data by making the POST request to the site then searching the db
	$this->post('/admin/product/add', $data_item_ok);
        $this->assertResponseSuccess();
	$record = $product_table->find()->where(['name' => $data_item_ok['name']]);
	$this->assertEquals(1, $record->count());


    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
