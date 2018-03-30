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
        $user->name ='Deeppp';
        $user->email ='deeppp39@njit.com';
        $user->password ='qWeRtYuI12';
        $this->assertTrue($user->save());
    }
    public function testUpdateUser()
    {
        $user = User::all()->last();
        $user-> where('name', 'Deeppp')
            -> update(['name' => 'Steve smith']);
        $this->assertTrue($user->save());

    }
    public function testDeleteUser()
    {
        $user = User::all()->last();
        $this->assertTrue($user->delete());
    }

    public function testCountUser()
    {
       $users = User::all();
       $userCount = count($users);
       $this->assertEquals(50,$userCount);
       $this->assertInternalType("int",$userCount);
    }
}
