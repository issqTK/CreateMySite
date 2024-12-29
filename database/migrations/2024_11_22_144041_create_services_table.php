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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type');
            $table->text('features');
            $table->decimal('starting_price', 10, 2);
            $table->string('ideal_for')->nullable();
            $table->string('title');
            $table->text('description');
            $table->string('meta_title');
            $table->text('meta_description');
            $table->string('slug')->unique();
            $table->text('svg');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
