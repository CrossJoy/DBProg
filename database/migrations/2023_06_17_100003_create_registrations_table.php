<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('registration', function (Blueprint $table) {
            $table->integer('reg_id')->unsigned();
            $table->integer('event_id')->unsigned();
            $table->integer('stud_id')->unsigned();
            $table->date('reg_date');
            $table->primary('reg_id');
            $table->foreign('event_id')->references('event_id')->on('event');
            $table->foreign('stud_id')->references('stud_id')->on('student');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registration');
    }
};
