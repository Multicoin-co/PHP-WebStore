<?php
namespace App\Test\TestCase\Controller;

use App\Controller\ProductController;
use Cake\TestSuite\IntegrationTestCase;

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
        'app.product_images'
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
        $this->markTestIncomplete('Not implemented yet.');
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
