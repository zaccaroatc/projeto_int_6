<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('point_id');
            $table->string('slug');
            $table->string('title');
            $table->string('cover')->nullable();
            $table->text('content')->nullable();
            $table->integer('views')->default(0);
            $table->unsignedTinyInteger('status')->default(0);

            $table->timestamps();

            $table->foreign('point_id')->references('id')->on('points')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
