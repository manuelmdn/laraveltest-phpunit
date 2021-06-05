<?php

namespace Tests\Feature\Models;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    public function testUser()
    {   
       factory('App\User')->create([
            'email' => 'sally@example.com'
        ]);


        $this->assertDatabaseHas('users', [
            'email' => 'sally@example.com',
        ]);

        $this->assertDatabaseMissing('users', [
            'email' => 'any@example.com',
        ]);
    }
}
