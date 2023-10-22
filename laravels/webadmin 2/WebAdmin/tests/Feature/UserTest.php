<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class UserTest extends TestCase
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
    // public function test_login_redirect_to_dashboard_succesfully(){
    //     User::factory()->create([
    //         'email'=>'test12@gmail.com',
    //         'password'=>'11111'
    //     ]);
    //     $response =$this->post('/login_submit', [
    //        'email'=>'test11@gmail.com',
    //        'password'=>'11111' 
    //     ]);
    //     $response->assertStatus(302);
    //     $response->assertRedirect('/dashboard');
    // }
    // public function test_auth_user_can_access_dashboard(){
    //     $user=User::factory()->create();

    //     $response=$this->actingAs($user)->get('/dashboard');
    // }
}
