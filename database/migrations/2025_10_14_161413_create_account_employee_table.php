<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('account_employee', function (Blueprint $table) {
            $table->unsignedInteger('account_id');
            $table->unsignedInteger('employee_id');

            $table->foreign('account_id')
                ->references('id')->on('account')
                ->onDelete('cascade');

            $table->foreign('employee_id')
                ->references('id')->on('employee')
                ->onDelete('cascade');

            $table->primary(['account_id', 'employee_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('account_employee');
    }
};
