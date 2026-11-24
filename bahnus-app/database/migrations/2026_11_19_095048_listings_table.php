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
        Schema::create('listings_table', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignID('user_id')->constrained('users')->cascadeOnDelete();
            $table->foreignID('buyer_id')->constrained('users')->cascadeOnDelete();
            $table->string('fish_type');
            $table->integer('weight');
            $table->integer('price_per_kg');
            $table->date('collection_date');
            $table->string('payment_filepath');
            $table->string('payment_filename');
            $table->string('location_name');
            $table->string('location_link');
            $table->enum('payment_status', ['unpaid', 'paid', 'cancelled']);
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
