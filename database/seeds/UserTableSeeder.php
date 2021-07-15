<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $user1 = new User;
        // $user1->name = "Mg Mg";
        // $user1->email = "mgmg@gmail.com";
        // $user1->password = Hash::make("password");
        // $user1->save();

        factory(User::class,2)->create();
    }
}
