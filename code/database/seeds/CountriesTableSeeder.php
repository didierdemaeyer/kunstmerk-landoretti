<?php

use App\Country;
use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('countries')->delete();

		Country::create([
			'name_en' => 'Belgium',
			'name_nl' => 'België'
		]);
		Country::create([
			'name_en' => 'The Netherlands',
			'name_nl' => 'Nederland'
		]);
		Country::create([
			'name_en' => 'Luxembourg',
			'name_nl' => 'Luxemburg'
		]);
		Country::create([
			'name_en' => 'Germany',
			'name_nl' => 'Duitsland'
		]);
		Country::create([
			'name_en' => 'France',
			'name_nl' => 'Frankrijk'
		]);
		Country::create([
			'name_en' => 'United Kingdom',
			'name_nl' => 'Verenigd Koninkrijk'
		]);

	}
}
