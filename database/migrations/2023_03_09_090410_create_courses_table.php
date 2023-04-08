<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->longText('title');
            $table->longText('description');
            $table->string('duration');
            $table->integer('hours');
            $table->bigInteger('total_topics');
            $table->decimal('fee');
            $table->integer('discount');
            $table->integer('ojt_duration');
            $table->longText('learning_outcome');
            $table->longText('feature_img');
            $table->foreign('category_id')
                ->on('categories')
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
        Schema::dropIfExists('courses');
    }
}
