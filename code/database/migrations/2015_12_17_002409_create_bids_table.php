<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bids', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('auction_id')->unsigned();
            $table->decimal('bid', 15, 2);
            $table->softDeletes();
            $table->timestamps();

            $table->primary(['user_id', 'auction_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('bids');
    }
}
