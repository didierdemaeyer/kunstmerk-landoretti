<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFaqCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faq_category', function (Blueprint $table) {
            $table->integer('category_id')->unsigned();
            $table->integer('faq_id')->unsigned();
            $table->timestamps();

            $table->primary(['category_id', 'faq_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('faq_category');
    }
}
