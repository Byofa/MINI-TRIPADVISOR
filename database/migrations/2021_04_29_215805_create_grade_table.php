<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grade', function (Blueprint $table) {
            $table->id();
            $table->string('comment', 255)->nullable();
            $table->tinyInteger('grade')->length(5);
            $table->unsignedBigInteger('place_id');
            $table->unsignedBigInteger('users_id');
            $table->foreign('place_id')->references('id')->on('place');
            $table->foreign('users_id')->references('id')->on('users');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grade');
        Schema::table('grade', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
}
