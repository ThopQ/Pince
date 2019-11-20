<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Genre;

class CreateGenresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genres', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->text('description');
            $table->timestamps();
        });

        Genre::create([
            'name' => 'Action',
            'description' => 'A type of film in which a lot of exciting things happen'
        ]);

        Genre::create([
            'name' => 'Comedy',
            'description' => 'A film that is intentionally funny either in its characters or its action'
        ]);

        Genre::create([
            'name' => 'Thriller',
            'description' => 'A film that has an exciting story, often about solving a crime'
        ]);

        Genre::create([
            'name' => 'Drama',
            'description' => 'A film that has a mostly sad and depressive story'
        ]);

        Genre::create([
            'name' => 'Horror',
            'description' => 'A film so horrifying, your girlfriend probably crushes your hand instead of your heart'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('genres');
    }
}
