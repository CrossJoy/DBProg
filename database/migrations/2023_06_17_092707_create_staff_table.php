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
        Schema::create('staff', function (Blueprint $table) {
            $table->integer('staff_id')->unsigned();
            $table->string('staff_name', 30)->nullable(false);
            $table->string('staff_phone', 20)->nullable();
            $table->integer('event_id')->unsigned();
            $table->primary('staff_id');
            $table->foreign('event_id')->references('event_id')->on('event');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff');
    }
};
