<?php

use App\Auction_style;
use Illuminate\Database\Seeder;

class AuctionStylesTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('auction_styles')->delete();

		Auction_style::create([
			'name_en' => 'Abstract',
			'name_nl' => 'Abstract'
		]);
		Auction_style::create([
			'name_en' => 'African American',
			'name_nl' => 'Afro-Amerikaans'
		]);
		Auction_style::create([
			'name_en' => 'Asian Contemporary',
			'name_nl' => 'Aziatisch Hedendaags'
		]);
		Auction_style::create([
			'name_en' => 'Conceptual',
			'name_nl' => 'Conceptueel'
		]);
		Auction_style::create([
			'name_en' => 'Contemporary',
			'name_nl' => 'Hedendaags'
		]);
		Auction_style::create([
			'name_en' => 'Emerging Artists',
			'name_nl' => 'Opkomende kunstenaars'
		]);
		Auction_style::create([
			'name_en' => 'Figurative',
			'name_nl' => 'Figuratief'
		]);
		Auction_style::create([
			'name_en' => 'Middle Eastern Contemporary',
			'name_nl' => 'Midden-Oosten Hedendaags'
		]);
		Auction_style::create([
			'name_en' => 'Minimalism',
			'name_nl' => 'Minimalisme'
		]);
		Auction_style::create([
			'name_en' => 'Modern',
			'name_nl' => 'Modern'
		]);
		Auction_style::create([
			'name_en' => 'Pop',
			'name_nl' => 'Pop'
		]);
		Auction_style::create([
			'name_en' => 'Urban',
			'name_nl' => 'Urban'
		]);
		Auction_style::create([
			'name_en' => 'Vintage Photographs',
			'name_nl' => 'Klassieke Fotografie'
		]);
	}
}
