<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFaqCategorieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faq_categorie', function (Blueprint $table) {
            $table->integer('categorie_id')->unsigned();
            $table->integer('faq_id')->unsigned();

            $table->primary(['categorie_id', 'faq_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('faq_categorie');
    }
}
