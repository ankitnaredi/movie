<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
			$table->text('title')->nullable();
			$table->integer('year')->nullable();
			$table->double('rated')->nullable();
			$table->text('released')->nullable();
			$table->double('runtime')->nullable();
			$table->text('genre')->nullable();
			$table->text('director')->nullable();
			$table->text('writer')->nullable();
			$table->text('actors')->nullable();
			$table->text('plot')->nullable();
			$table->double('metascore')->nullable();
			$table->double('imdbRating')->nullable();
			$table->double('imdbVotes')->nullable();
			$table->text('imdbID')->nullable();
			$table->text('type')->nullable();
			$table->text('DVD')->nullable();
			$table->text('boxOffice')->nullable();
			$table->text('production')->nullable();
			$table->text('website')->nullable();
			$table->text('response')->nullable();
			$table->enum('is_premium_content',['yes','no'])->nullable();
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
        Schema::dropIfExists('movies');
    }
};
