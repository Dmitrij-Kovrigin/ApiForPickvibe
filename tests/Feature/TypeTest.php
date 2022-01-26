<?php

namespace Tests\Feature;

use App\Models\Brand;
use App\Models\Type;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TypeTest extends TestCase
{
    use RefreshDatabase;

    public function test_types_index_page()
    {
        $this->withoutExceptionHandling();
        $response = $this->get('api/types');
        $response->assertStatus(200);
    }

    public function test_new_type_creation()
    {
        $type = Type::factory()->make();
        $this->assertNotEmpty($type->name);
        $this->assertNotEmpty($type->brand_id);
    }
}
