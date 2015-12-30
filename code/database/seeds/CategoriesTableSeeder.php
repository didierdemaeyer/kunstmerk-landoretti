<?php

use App\Categorie;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('categories')->delete();

		Categorie::create([
			'name_en' => 'auction',
			'name_nl' => 'veiling'
		]);
		Categorie::create([
			'name_en' => 'account',
			'name_nl' => 'gebruikersaccount'
		]);
		Categorie::create([
			'name_en' => 'registration',
			'name_nl' => 'registratie'
		]);
		Categorie::create([
			'name_en' => 'question',
			'name_nl' => 'vraag'
		]);
		Categorie::create([
			'name_en' => 'watchlist',
			'name_nl' => 'volglijst'
		]);
	}
}
