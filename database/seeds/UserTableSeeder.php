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
        $user = new User([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin123'),
            'admin' => '1' // user->0 , admin->1 , assist->2 
        ]);
        $user->save();

        $user = new User([
            'name' => 'admin 1',
            'email' => 'admin1@admin.com',
            'password' => bcrypt('admin123'),
            'admin' => '1' // user->0 , admin->1 , assist->2 
        ]);
        $user->save();

        $user = new User([
            'name' => 'admin 2',
            'email' => 'admin2@admin.com',
            'password' => bcrypt('admin123'),
            'admin' => '1' // user->0 , admin->1 , assist->2 
        ]);
        $user->save();

        $user = new User([
            'name' => 'assist 1',
            'email' => 'assist1@assist.com',
            'password' => bcrypt('assist123'),
            'admin' => '2' // user->0 , admin->1 , assist->2 
        ]);
        $user->save();

        $user = new User([
            'name' => 'assist 2',
            'email' => 'assist2@assist.com',
            'password' => bcrypt('assist123'),
            'admin' => '2' // user->0 , admin->1 , assist->2 
        ]);
        $user->save();

        $user = new User([
            'name' => 'user 1',
            'email' => 'user1@user.com',
            'password' => bcrypt('user123'),
            'admin' => '0' // user->0 , admin->1 , assist->2 
        ]);
        $user->save();

        $user = new User([
            'name' => 'user 2',
            'email' => 'user2@user.com',
            'password' => bcrypt('user123'),
            'admin' => '0' // user->0 , admin->1 , assist->2 
        ]);
        $user->save();

        $user = new User([
            'name' => 'user 3',
            'email' => 'user3@user.com',
            'password' => bcrypt('user123'),
            'admin' => '0' // user->0 , admin->1 , assist->2 
        ]);
        $user->save();
    }
}
