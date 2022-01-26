<?php

namespace Tests\Feature;

use App\Models\Brand;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BrandTest extends TestCase
{
    use RefreshDatabase;

    public function test_brands_index_page()
    {
        $this->withoutExceptionHandling();
        $response = $this->get('api/brands');
        $response->assertStatus(200);
    }

    public function test_new_brand_creation()
    {
        $brand = Brand::factory()->create();
        $this->assertNotEmpty($brand->name);
    }

    public function test_brand_update()
    {
        $brand = Brand::factory()->create(['name' => 'Test name']);
        $this->putJson("api/brands/{$brand->id}", ['name' => 'Changed name'])
            ->assertStatus(200)
            ->assertJsonFragment(['name' => 'Changed name']);
    }

    public function test_delete()
    {
        $brand = Brand::factory()->create();
        $brand->delete();
        $this->assertModelMissing($brand);
    }
}
