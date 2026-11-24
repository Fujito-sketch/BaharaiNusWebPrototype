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
        Schema::create('trainings_table', function(Blueprint $table){
            $table->id();
            $table->string('presenter_name');
            $table->string('topic');
            $table->date('class_date');
            $table->integer('student_amount');
            $table->foreignId('student_id')->constrained('users')->cascadeOnDelete();
            $table->string('location_name');
            $table->string('location_link');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
