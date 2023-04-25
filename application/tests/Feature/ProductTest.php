<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

     /**
     * Product listing test.
     *
     * @return void
     */
    public function test_get_all()
    {
        $response = $this->get('/api/products');

        $response->assertStatus(200);
    }

     /**
     * Test to register product.
     *
     * @return void
     */
    public function test_create_product()
    {
        
        $product = [
            "code" => fake()->unique()->randomNumber(4),
            "name" => "Boné",
            "brand" => "Nike",
            "description" => "Bone nike copa do mundo",
            "price" => "79.99",
            "available_quantity" => "200"
        ];

        $response = $this->post('api/products', $product);

        $response->assertStatus(200);
    }

      /**
     * Test to update product.
     *
     * @return void
     */
    public function test_update_product()
    {
        
        $product = [
            "price" => "3999.90",
            "available_quantity" => "100",
        ];

        $response = $this->post('api/products/1', $product);

        $response->assertStatus(200);
    }

        /**
     * Test to inactivate product.
     *
     * @return void
     */
    public function test_inactive_product()
    {
        

        $response = $this->delete('api/products/1');

        $response->assertStatus(200);
    }
}
