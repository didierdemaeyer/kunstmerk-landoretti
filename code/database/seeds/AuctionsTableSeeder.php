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
			'owner_id'         => $owner->id,
			'auction_style_id' => $minimalism->id,
			'title'            => 'Test Title',
			'artist'           => 'Joske Vermeulen',
			'year'             => '1930',
			'width'            => 10.2,
			'height'           => 10.2,
			'depth'            => null,
			'description_en'   => 'lalalala descriptions english Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab animi, aperiam aut consectetur deserunt dignissimos dolor facere fuga illum impedit laudantium minus mollitia nihil perferendis quia repellat repellendus ullam unde.',
			'description_nl'   => 'lalalala beschrijving nederlands Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab animi, aperiam aut consectetur deserunt dignissimos dolor facere fuga illum impedit laudantium minus mollitia nihil perferendis quia repellat repellendus ullam unde.',
			'condition_en'     => 'condition english Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab animi, aperiam aut consectetur deserunt dignissimos dolor facere fuga illum impedit laudantium minus mollitia nihil perferendis quia repellat repellendus ullam unde.',
			'condition_nl'     => 'staat nederlands Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab animi, aperiam aut consectetur deserunt dignissimos dolor facere fuga illum impedit laudantium minus mollitia nihil perferendis quia repellat repellendus ullam unde.',
			'origin_en'        => 'origin english',
			'origin_nl'        => 'oorsprong nederlands',
			'image_artwork'    => '',
			'image_signature'  => '',
			'image_optional'   => '',
			'min_price'        => 9000,
			'max_price'        => 12000,
			'buyout_price'     => '14000',
			'enddate'          => '2016-02-02 00:00:00'
		]);
		Auction::create([
			'owner_id'         => $owner->id,
			'auction_style_id' => $minimalism->id,
			'title'            => 'WOW SO ART',
			'artist'           => 'Doge',
			'year'             => '2015',
			'width'            => 13,
			'height'           => 37,
			'depth'            => null,
			'description_en'   => 'wow! such word. go sit, such ipsum! such amet. wow. such word. oh my design. wow! much layout! go sit, very elit! rate me. plz text! much swag. plz lorem! i iz cute?. many lorem, wow! so ipsum. much dolor. plz text! much layout, rate me! many doge! such ipsum! need aenean. plz lorem! very elit! such word. oh my text. plz word, very word, wow, i iz cute?. much dolor. wow! rate me! much layout, very elit! go sit, i can haz text, plz text! so consectetur, wow, plz lorem! such amet. very doge! go sit, i can haz text, ',
			'description_nl'   => 'wow! such word. go sit, such ipsum! such amet. wow. such word. oh my design. wow! much layout! go sit, very elit! rate me. plz text! much swag. plz lorem! i iz cute?. many lorem, wow! so ipsum. much dolor. plz text! much layout, rate me! many doge! such ipsum! need aenean. plz lorem! very elit! such word. oh my text. plz word, very word, wow, i iz cute?. much dolor. wow! rate me! much layout, very elit! go sit, i can haz text, plz text! so consectetur, wow, plz lorem! such amet. very doge! go sit, i can haz text, ',
			'condition_en'     => 'wow! such word. go sit, such ipsum! such amet. wow. such word. oh my design. wow! much layout! go sit, very elit! rate me. plz text! much swag. plz lorem! i iz cute?. many lorem, wow! so ipsum. much dolor. plz text! much layout, rate me! many doge! such ipsum! need aenean. plz lorem! very elit! such word. oh my text. plz word, very word, wow, i iz cute?. much dolor. wow! rate me! much layout, very elit! go sit, i can haz text, plz text! so consectetur, wow, plz lorem! such amet. very doge! go sit, i can haz text, ',
			'condition_nl'     => 'wow! such word. go sit, such ipsum! such amet. wow. such word. oh my design. wow! much layout! go sit, very elit! rate me. plz text! much swag. plz lorem! i iz cute?. many lorem, wow! so ipsum. much dolor. plz text! much layout, rate me! many doge! such ipsum! need aenean. plz lorem! very elit! such word. oh my text. plz word, very word, wow, i iz cute?. much dolor. wow! rate me! much layout, very elit! go sit, i can haz text, plz text! so consectetur, wow, plz lorem! such amet. very doge! go sit, i can haz text, ',
			'origin_en'        => 'origin lalalalalal',
			'origin_nl'        => 'oorsprong lalalalallala',
			'image_artwork'    => '/img/uploads/1451409259_Doge_homemade_meme.jpg',
			'image_signature'  => '/img/uploads/1451409259_18360-doge-doge-simple.jpg',
			'image_optional'   => '',
			'min_price'        => 9000,
			'max_price'        => 10000,
			'buyout_price'     => '12000',
			'enddate'          => '2016-02-02 00:00:00'
		]);
		Auction::create([
			'owner_id'         => $owner->id,
			'auction_style_id' => $minimalism->id,
			'title'            => 'Such Title Wow',
			'artist'           => 'Doge',
			'year'             => '2015',
			'width'            => 10,
			'height'           => 1337,
			'depth'            => null,
			'description_en'   => 'wow! such word. go sit, such ipsum! such amet. wow. such word. oh my design. wow! much layout! go sit, very elit! rate me. plz text! much swag. plz lorem! i iz cute?. many lorem, wow! so ipsum. much dolor. plz text! much layout, rate me! many doge! such ipsum! need aenean. plz lorem! very elit! such word. oh my text. plz word, very word, wow, i iz cute?. much dolor. wow! rate me! much layout, very elit! go sit, i can haz text, plz text! so consectetur, wow, plz lorem! such amet. very doge! go sit, i can haz text, ',
			'description_nl'   => 'wow! such word. go sit, such ipsum! such amet. wow. such word. oh my design. wow! much layout! go sit, very elit! rate me. plz text! much swag. plz lorem! i iz cute?. many lorem, wow! so ipsum. much dolor. plz text! much layout, rate me! many doge! such ipsum! need aenean. plz lorem! very elit! such word. oh my text. plz word, very word, wow, i iz cute?. much dolor. wow! rate me! much layout, very elit! go sit, i can haz text, plz text! so consectetur, wow, plz lorem! such amet. very doge! go sit, i can haz text, ',
			'condition_en'     => 'wow! such word. go sit, such ipsum! such amet. wow. such word. oh my design. wow! much layout! go sit, very elit! rate me. plz text! much swag. plz lorem! i iz cute?. many lorem, wow! so ipsum. much dolor. plz text! much layout, rate me! many doge! such ipsum! need aenean. plz lorem! very elit! such word. oh my text. plz word, very word, wow, i iz cute?. much dolor. wow! rate me! much layout, very elit! go sit, i can haz text, plz text! so consectetur, wow, plz lorem! such amet. very doge! go sit, i can haz text, ',
			'condition_nl'     => 'wow! such word. go sit, such ipsum! such amet. wow. such word. oh my design. wow! much layout! go sit, very elit! rate me. plz text! much swag. plz lorem! i iz cute?. many lorem, wow! so ipsum. much dolor. plz text! much layout, rate me! many doge! such ipsum! need aenean. plz lorem! very elit! such word. oh my text. plz word, very word, wow, i iz cute?. much dolor. wow! rate me! much layout, very elit! go sit, i can haz text, plz text! so consectetur, wow, plz lorem! such amet. very doge! go sit, i can haz text, ',
			'origin_en'        => 'origin lalalala',
			'origin_nl'        => 'oorsprong lalalala doge',
			'image_artwork'    => '/img/uploads/1451409259_18360-doge-doge-simple.jpg',
			'image_signature'  => '/img/uploads/1451409259_Doge_homemade_meme.jpg',
			'image_optional'   => '',
			'min_price'        => 9000,
			'max_price'        => 12000,
			'buyout_price'     => '14000',
			'enddate'          => '2016-02-02 00:00:00'
		]);
	}
}
