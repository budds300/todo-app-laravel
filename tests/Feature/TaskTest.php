<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TaskTest extends TestCase
{
    use WithFaker;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_index()
    {
        $response = $this->getJson('api/tasks');
        // $response->dd();

        $response->assertStatus(200);
    }

    public function test_store()
    {
        $task = ['text' => $this->faker->text(20), 'day' => $this->faker->date, 'reminder' => $this->faker->numberBetween(0, 1)];

        $response = $this->postJson('api/tasks', $task);
        // $response->dd();

        $response->assertStatus(200);
    }

    public function test_show()
    {
        $response = $this->getJson('api/tasks/4');
        // $response->dd();

        $response->assertStatus(200)
            ->assertJson(['message' => 'success']);
    }

    public function test_update()
    {
        $response = $this->putJson('api/tasks/5', ['text' => $this->faker->text(20), 'day' => $this->faker->date, 'reminder' => $this->faker->numberBetween(0, 1)]);
        // $response->dd();

        $response->assertStatus(200);
    }

    public function test_destroy()
    {
        $response = $this->deleteJson('api/tasks/3');
        // $response->dd();

        $response->assertStatus(200);
    }
}
