<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthTest extends TestCase
{
    use WithFaker;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_register()
    {
        // $password = $this->faker->password();
        $password = '123456';
        $user = ['name' => $this->faker->name(), 'email' => $this->faker->email(), 'password' => $password, 'password_confirmation' => $password];

        $response = $this->postJson('api/auth/register', $user);
        $response->dump();

        $response->assertStatus(200)->assertJsonStructure(['status', 'message', 'data']);
    }

    public function test_login_error(){
        $user = ['email' => 'hpurdy@gmail.com', 'password' => '1234566'];

        $response = $this->postJson('api/auth/login', $user);
        $response->dump();

        $response->assertStatus(401)->assertJsonStructure(['status', 'message', 'data']);
    }

    public function test_login_success(){
        $user = ['email' => 'hpurdy@gmail.com', 'password' => '123456'];

        $response = $this->postJson('api/auth/login', $user);
        echo $response->getCookie('XSRF-TOKENM');
        exit;

        $response->assertSessionHas('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d');
        // $response->assertCookie('XSRF-TOKEN');



        // $response->assertStatus(200)->assertJsonStructure(['status', 'message', 'data']);
    }
}
