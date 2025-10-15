<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('employee')) {
            Schema::create('employee', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name', 255);
                $table->text('location');
                $table->integer('total_student');
                $table->integer('total_meal');
                $table->integer('total_allergy');
                $table->text('type_allergy');
                $table->string('logo', 255);
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('employee');
    }
};
