<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('portfolio_type_id')->unsigned();
            $table->string('name');
            $table->string('cover_img');
            $table->longText('description');
            $table->string('client');
            $table->string('services');
            $table->string('year');
            $table->string('website')->nullable();
            $table->string('dev_icons');
            
            $table->timestamps();

            $table->foreign('portfolio_type_id')->references('id')->on('portfolio_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('portfolios');
    }
}
