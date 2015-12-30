<?php

use App\Categorie;
use App\Faq;
use Illuminate\Database\Seeder;

class FaqCategorieTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('faq_categorie')->delete();

		// get categories
		$cat_auction = Categorie::where('name_en', 'auction')->first();
		$cat_account = Categorie::where('name_en', 'account')->first();
		$cat_registration = Categorie::where('name_en', 'registration')->first();
		$cat_question = Categorie::where('name_en', 'question')->first();
		$cat_watchlist = Categorie::where('name_en', 'watchlist')->first();

		// get faqs
		$faq_bid = Faq::where('question_en', 'How to bid?')->first();
		$faq_sell = Faq::where('question_en', 'How to sell?')->first();
		$faq_buy = Faq::where('question_en', 'How to buy?')->first();
		$faq_register = Faq::where('question_en', 'How to register?')->first();
		$faq_question = Faq::where('question_en', 'How to ask a question?')->first();
		$faq_watchlist = Faq::where('question_en', 'What is a watchlist?')->first();
		$faq_use_watchlist = Faq::where('question_en', 'How to use a watchlist?')->first();


		// attach relationships
		$cat_auction->faqs()->attach($faq_bid);
		$cat_auction->faqs()->attach($faq_sell);
		$cat_auction->faqs()->attach($faq_buy);

		$cat_account->faqs()->attach($faq_register);

		$cat_registration->faqs()->attach($faq_register);

		$cat_question->faqs()->attach($faq_question);

		$cat_watchlist->faqs()->attach($faq_watchlist);
		$cat_watchlist->faqs()->attach($faq_use_watchlist);
	}
}
