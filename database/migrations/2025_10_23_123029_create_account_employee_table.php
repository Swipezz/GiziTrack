<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('account_employee', function (Blueprint $table) {
            $table->unsignedInteger('account_id');
            $table->unsignedInteger('employee_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('account_employee');
    }
};
