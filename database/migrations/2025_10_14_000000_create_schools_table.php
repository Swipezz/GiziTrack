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
        Schema::create('schools', function (Blueprint $table) {
            $table->id(); // Primary key, auto increment
            $table->string('name', 255);
            $table->text('location');
            $table->integer('total_student');
            $table->integer('total_meal');
            $table->integer('total_allergy');
            $table->text('type_allergy');
            $table->string('logo', 255);
            $table->timestamps(); // created_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schools');
    }
};
