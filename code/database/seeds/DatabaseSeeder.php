<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		// $this->call(UsersTableSeeder::class);
		$this->call(RolesTableSeeder::class);
		$this->call(CountriesTableSeeder::class);
		$this->call(UsersTableSeeder::class);
		$this->call(AuctionStylesTableSeeder::class);
		$this->call(AuctionsTableSeeder::class);
		$this->call(CategoriesTableSeeder::class);
		$this->call(FaqsTableSeeder::class);
		$this->call(FaqCategorieTableSeeder::class);

		Model::reguard();
	}
}
