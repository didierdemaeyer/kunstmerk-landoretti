<?php

use App\Auction;
use App\Auction_style;
use App\User;
use Illuminate\Database\Seeder;

class AuctionsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('auctions')->delete();

		// get auction_style
		$minimalism = Auction_style::where('name_en', 'Modern')->first();

		// get user -> owner
		$owner = User::where('name', 'admin')->first();


		Auction::create([
			'owner_id' => $owner->id,
			'auction_style_id'=> $minimalism->id,
			'title' => 'Test Title',
			'year'  => '1995-00-00',
			'width' => 10.2,
			'height' => 10.2,
			'depth' => null,
			'description_en' => 'lalalala descriptions english Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab animi, aperiam aut consectetur deserunt dignissimos dolor facere fuga illum impedit laudantium minus mollitia nihil perferendis quia repellat repellendus ullam unde.',
			'description_nl' => 'lalalala beschrijving nederlands Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab animi, aperiam aut consectetur deserunt dignissimos dolor facere fuga illum impedit laudantium minus mollitia nihil perferendis quia repellat repellendus ullam unde.',
			'condition_en' => 'condition english Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab animi, aperiam aut consectetur deserunt dignissimos dolor facere fuga illum impedit laudantium minus mollitia nihil perferendis quia repellat repellendus ullam unde.',
			'condition_nl' => 'staat nederlands Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab animi, aperiam aut consectetur deserunt dignissimos dolor facere fuga illum impedit laudantium minus mollitia nihil perferendis quia repellat repellendus ullam unde.',
			'origin_en' => 'origin english',
			'origin_nl' => 'oorsprong nederlands',
			'image_artwork' => '',
			'image_signature' => '',
			'image_optional' => '',
			'min_price' => 9000,
			'max_price' => 12000,
			'buyout_price' => '14000',
			'enddate' => '2016-02-02 18:00:00'
		]);
	}
}
