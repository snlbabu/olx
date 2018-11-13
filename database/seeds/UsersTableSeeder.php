<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['name' => 'Sunil Kumar T', 'email' => 's1728k@gmail.com', 'password' => 'krishna@1'],
            ['name' => 'Sunil Kumar T', 'email' => 's1729k@gmail.com', 'password' => 'krishna@1'],
            ['name' => 'Sunil Kumar T', 'email' => 'snlbabu@gmail.com', 'password' => 'krishna@1'],
            ['name' => 'Sunil Kumar T', 'email' => 'tsk19870227@gmail.com', 'password' => 'krishna@1'],
            ['name' => 'Sunil Kumar T', 'email' => 'sunilkumarthimmareddy@gmail.com', 'password' => 'krishna@1'],
            ['name' => 'Sunil Kumar T', 'email' => 'usmeaikb@gmail.com', 'password' => 'krishna@1'],
        ];
        User::truncate();
        foreach($users as $user){
            User::create([
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => bcrypt($user['password']),
            ]);
        }

    }
}
