<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        $User = new User;
        $User->persona_id = 1;
        $User->email = "admin@gmail.com";
        $User->username = "rodrigoMA";
        $User->password = bcrypt("12345678");
        $User->save();

    }
}
