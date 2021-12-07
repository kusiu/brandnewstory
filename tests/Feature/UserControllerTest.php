<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function get_users()
    {
        $user = User::factory()->hasAddress([
            'street' => 'Secret Street',
            'city' => 'Secret City',
            'country' => 'Secret Country',
        ])->create([
            'first_name' => 'Secret First Name',
            'last_name' => 'Secret Last Name',
            'email' => 'Secret Email',
        ]);

        $response = $this->get('/api/users')->assertOk();
        $user = json_decode($response->getContent(), true)['data'][0];
        $this->assertNotEquals('Secret First Name', $user['first_name']);
        $this->assertNotEquals('Secret Last Name', $user['last_name']);
        $this->assertNotEquals('Secret Email', $user['email']);
        $this->assertNotEquals('Secret City', $user['address'][0]['city']);
    }
}
