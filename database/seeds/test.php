<?php

use Illuminate\Database\Seeder;
use App\User;

class test extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {
    
        // this used to enter dumy login 
        $user = User::create([
            'name' => 'admin',
            'email' => 'admin2@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        $user->attachRole('administrator');

        $user->admin()->create([
            'name' => 'admin',
            'lname' => 'new',
            'email' => 'admin2@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
        
        return back()->with('success', 'User Created Successfully!');
    }
}
