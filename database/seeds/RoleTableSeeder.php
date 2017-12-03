<?php

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$role_admin = new Role();
		$role_admin->name = 'admin';
		$role_admin->description = 'Administrator User';
		$role_admin->save();

		$role_customer = new Role();
		$role_customer->name = 'customer';
		$role_customer->description = 'Customer User';
		$role_customer->save();

		$role_provider = new Role();
		$role_provider->name = 'provider';
		$role_provider->description = 'Provider User';
		$role_provider->save();
    }
}
