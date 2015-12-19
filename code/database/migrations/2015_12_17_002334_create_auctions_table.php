<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuctionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auctions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('owner_id')->unsigned();
            $table->integer('buyer_id')->unsigned();
            $table->integer('auction_style_id')->unsigned();
            $table->string('title');
            $table->date('year');
            $table->float('width');
            $table->float('height');
            $table->float('depth');
            $table->text('description');
            $table->text('condition');
            $table->string('origin');
            $table->string('image_artwork');
            $table->string('image_signature');
            $table->string('image_optional');
            $table->decimal('min_price', 15, 2);
            $table->decimal('max_price', 15, 2);
            $table->decimal('buyout_price', 15, 2);
            $table->datetime('enddate');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('auctions');
    }
}
