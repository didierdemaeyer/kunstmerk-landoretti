<?php

use App\Country;
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

		// get country Belgium
		$belgium = Country::where('name_en', 'Belgium')->first();

		// create dummy users
		User::create([
			'role_id'    => $adminrole->id,
			'country_id' => $belgium->id,
			'name'       => 'admin',
			'email'      => 'admin@test.be',
			'password'   => bcrypt('root'),
			'postalcode' => '2627',
			'city'       => 'Schelle',
			'address'    => 'Frans Cretenlaan 55',
			'phone'      => '0123456789',
		]);

		User::create([
			'role_id'    => $userrole->id,
			'country_id' => $belgium->id,
			'name'       => 'user',
			'email'      => 'user@test.be',
			'password'   => bcrypt('root'),
			'postalcode' => '2627',
			'city'       => 'Schelle',
			'address'    => 'Frans Cretenlaan 55',
			'phone'      => '0123456789',
		]);
	}
}
