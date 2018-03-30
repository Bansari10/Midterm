<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
class UsersTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInsertUser()
    {
        $user = new User();
        $user->name ='Deep';
        $user->email ='deep39@njit.com';
        $user->password ='qWeRtYuI';
        $this->assertTrue($user->save());
    }
}
