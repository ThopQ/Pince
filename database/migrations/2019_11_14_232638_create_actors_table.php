<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Actor;

class CreateActorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->timestamps();
        });

        Actor::create([
            'name' => 'Leonardo diCaprio',
        ]);

        Actor::create([
            'name' => 'Morgan Freeman',
        ]);

        Actor::create([
            'name' => 'Christian Bale',
        ]);

        Actor::create([
            'name' => 'Maggie Gyllenhaal',
        ]);

        Actor::create([
            'name' => 'Bruce Willis',
        ]);

        Actor::create([
            'name' => 'Alan Rickman',
        ]);

        Actor::create([
            'name' => 'Margot Robbie',
        ]);

        Actor::create([
            'name' => 'Tim Robbins',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actors');
    }
}
