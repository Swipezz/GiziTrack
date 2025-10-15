<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('survey_food')) {
            Schema::create('survey_food', function (Blueprint $table) {
                $table->increments('id'); // id PRIMARY AUTO_INCREMENT
                $table->string('school'); // varchar(255)
                $table->string('food');   // varchar(255)
                $table->integer('total'); // int(11)
                $table->timestamps();     // created_at & updated_at
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('survey_food');
    }
};
