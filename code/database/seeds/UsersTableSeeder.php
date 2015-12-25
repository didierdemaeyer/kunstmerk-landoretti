<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('users')->delete();

		// get roles
		$adminrole = Role::where('name_en', 'admin')->first();
		$userrole = Role::where('name_en', 'user')->first();

		User::create([
			'role_id'    => $adminrole->id,
			'name'       => 'admin',
			'email'      => 'admin@test.be',
			'password'   => bcrypt('root'),
			'country'    => 'Belgium',
			'postalcode' => '2627',
			'city'       => 'Schelle',
			'address'    => 'Frans Cretenlaan 55',
			'phone'      => '0123456789',
		]);

		User::create([
			'role_id'    => $userrole->id,
			'name'       => 'user',
			'email'      => 'user@test.be',
			'password'   => bcrypt('root'),
			'country'    => 'Belgium',
			'postalcode' => '2627',
			'city'       => 'Schelle',
			'address'    => 'Frans Cretenlaan 55',
			'phone'      => '0123456789',
		]);
	}
}
