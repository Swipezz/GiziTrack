<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('survey_food', function (Blueprint $table) {
            $table->id();
            $table->string('school');
            $table->string('food');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('survey_food');
    }
};
