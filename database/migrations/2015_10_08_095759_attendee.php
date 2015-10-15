<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Attendee extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendees', function ($table) {
            $table->increments('id');
            $table->string('name', 255);
            $table->string('surname', 255);
            $table->integer('sex')->length(1)->unsigned();
            $table->string('mobile', 255);
            $table->string('email', 255);
            $table->string('school', 255);
            $table->integer('school_grade')->length(2)->unsigned();
            $table->integer('study_plan')->length(2)->unsigned();
            $table->text('address')->nullable();
            $table->integer('senior_project')->length(1)->unsigned()->nullable();
            $table->integer('workshop_1')->length(2)->unsigned()->nullable();
            $table->integer('workshop_2')->length(2)->unsigned()->nullable();
            $table->integer('seminar')->length(1)->unsigned()->nullable();
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
        //
    }
}
