<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$role_admin    = Role::where('name', 'admin')->first();
		$role_customer = Role::where('name', 'customer')->first();
		$role_provider = Role::where('name', 'provider')->first();

		$admin              = new User();
		$admin->first_name  = 'Admin';
		$admin->last_name   = 'Admin';
		$admin->email       = 'admin@user.com';
		$admin->password    = bcrypt('123123');
		$admin->company     = 'ImprentaKo';
		$admin->description = '';
		$admin->save();
		$admin->roles()->attach($role_admin);

		$customer              = new User();
		$customer->first_name  = 'Jane';
		$customer->last_name   = 'Johnsson';
		$customer->email       = 'janejohnsson@gmail.com';
		$customer->password    = bcrypt('123123');
		$customer->company     = 'JJ Tailoring';
		$customer->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.';
		$customer->save();
		$customer->roles()->attach($role_customer);

		$provider              = new User();
		$provider->first_name  = 'John';
		$provider->last_name   = 'Doe';
		$provider->email       = 'johndoe@gmail.com';
		$provider->password    = bcrypt('123123');
		$provider->company     = 'John Doe Print';
		$provider->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.';
		$provider->save();
		$provider->roles()->attach($role_provider);
    }
}
