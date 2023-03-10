<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseTrainersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_trainers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('trainer_id');
            $table->unsignedBigInteger('course_id');
            $table->unsignedBigInteger('batch_id');
            $table->foreign('trainer_id')
                ->on('trainers')
                ->references('id')
                ->onDelete('cascade');
            $table->foreign('course_id')
                ->on('courses')
                ->references('id')
                ->onDelete('cascade');
            $table->foreign('batch_id')
                ->on('batches')
                ->references('id')
                ->onDelete('cascade');
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
        Schema::dropIfExists('course_trainers');
    }
}
