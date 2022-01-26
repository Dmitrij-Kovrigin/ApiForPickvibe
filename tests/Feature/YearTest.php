<?php

namespace Tests\Feature;

use App\Models\Year;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class YearTest extends TestCase
{
    use RefreshDatabase;

    public function test_years_index_page()
    {
        $this->withoutExceptionHandling();
        $response = $this->get('api/years');
        $response->assertStatus(200);
    }

    public function test_new_year_creation()
    {
        $year = Year::factory()->make();
        $this->assertNotEmpty($year->year);
    }

    public function test_brand_update()
    {
        $year = Year::factory()->create(['year' => '1952']);
        $this->putJson("api/years/{$year->id}", ['year' => '2052'])
            ->assertStatus(200)
            ->assertJsonFragment(['year' => '2052']);
    }

    public function test_delete()
    {
        $year = Year::factory()->create();
        $year->delete();
        $this->assertModelMissing($year);
    }
}
