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
        Schema::create('course_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->constrained();
            $table->string('locale')->index();
            $table->string('name');
            $table->text('description');
            $table->string('level');
            $table->unique(['course_id','locale']);
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
        Schema::dropIfExists('course_translations');
    }
};
