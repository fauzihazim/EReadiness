<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->id();
            $table->integer('skorCSE1');
            $table->integer('skorCSE2');
            $table->integer('skorCSE3');
            $table->integer('skorCSE4');
            $table->integer('skorCSE5');
            $table->float('avgCSE');
            $table->integer('skorSDL1');
            $table->integer('skorSDL2');
            $table->integer('skorSDL3');
            $table->integer('skorSDL4');
            $table->integer('skorSDL5');
            $table->float('avgSDL');
            $table->integer('skorMFL1');
            $table->integer('skorMFL2');
            $table->integer('skorMFL3');
            $table->integer('skorMFL4');
            $table->float('avgMFL');
            $table->integer('skorOCSE1');
            $table->integer('skorOCSE2');
            $table->integer('skorOCSE3');
            $table->float('avgOCSE');
            $table->integer('skorLC1');
            $table->integer('skorLC2');
            $table->integer('skorLC3');
            $table->integer('skorLC4');
            $table->float('avgLC');
            $table->integer('nim')->unique();
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
        Schema::dropIfExists('answers');
    }
}
