<?php


/**
 * Breadcrumbs for routes accessible to anyone
 */

// Home
Breadcrumbs::register('home', function ($breadcrumbs)
{
	$breadcrumbs->push('Home', route('home'));
});

// Home > Faq
Breadcrumbs::register('faq', function ($breadcrumbs)
{
	$breadcrumbs->parent('home');
	$breadcrumbs->push('Faq', route('faq'));
});

// Home > Contact
Breadcrumbs::register('contact', function ($breadcrumbs)
{
	$breadcrumbs->parent('home');
	$breadcrumbs->push('Contact', route('getContact'));
});

// Home > Art
Breadcrumbs::register('art', function ($breadcrumbs)
{
	$breadcrumbs->parent('home');
	$breadcrumbs->push('Art', route('auctions.overview'));
});

// Home > Art > [Auction title]
Breadcrumbs::register('art.show', function ($breadcrumbs, $auction)
{
	$breadcrumbs->parent('art');
	$breadcrumbs->push($auction->title, route('auctions.show', $auction->slug));
});

// Home > Send Password Reset Email
Breadcrumbs::register('password.email', function ($breadcrumbs)
{
	$breadcrumbs->parent('home');
	$breadcrumbs->push('Send Password Reset Email', route('password.getEmail'));
});

// Home > Reset Passord
Breadcrumbs::register('password.reset', function ($breadcrumbs)
{
	$breadcrumbs->parent('home');
	$breadcrumbs->push('Reset Password', route('password.getReset'));
});


/**
 * Breadcrumbs for routes only accessible when not logged in
 */

// Home > Register
Breadcrumbs::register('register', function ($breadcrumbs)
{
	$breadcrumbs->parent('home');
	$breadcrumbs->push('Register', route('getRegister'));
});


/**
 * Breadcrumbs for routes only accessible when logged in
 */

// Home > Profile
Breadcrumbs::register('profile', function ($breadcrumbs)
{
	$breadcrumbs->parent('home');
	$breadcrumbs->push('Profile', route('profile'));
});

// Home > My Auctions
Breadcrumbs::register('myauctions', function ($breadcrumbs)
{
	$breadcrumbs->parent('home');
	$breadcrumbs->push('My Auctions', route('auctions.myauctions'));
});

// Home > My Auctions > Create
Breadcrumbs::register('myauctions.create', function ($breadcrumbs)
{
	$breadcrumbs->parent('myauctions');
	$breadcrumbs->push('Create', route('auctions.create'));
});

// Home > Watchlist
Breadcrumbs::register('watchlist', function ($breadcrumbs)
{
	$breadcrumbs->parent('home');
	$breadcrumbs->push('Watchlist', route('watchlist'));
});

// Home > Watchlist > Active
Breadcrumbs::register('watchlist.active', function ($breadcrumbs)
{
	$breadcrumbs->parent('watchlist');
	$breadcrumbs->push('Active', route('watchlist.active'));
});

// Home > Watchlist > Ended
Breadcrumbs::register('watchlist.ended', function ($breadcrumbs)
{
	$breadcrumbs->parent('watchlist');
	$breadcrumbs->push('Ended', route('watchlist.ended'));
});

// Home > My Bids
Breadcrumbs::register('mybids', function ($breadcrumbs)
{
	$breadcrumbs->parent('home');
	$breadcrumbs->push('My Bids', route('mybids'));
});

// Home > Art > [Auction title] > Thank You
Breadcrumbs::register('art.thank-you', function ($breadcrumbs, $auction)
{
	$breadcrumbs->parent('art.show', $auction);
	$breadcrumbs->push('Thank You', route('auctions.show', $auction->slug));
});