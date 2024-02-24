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
        Schema::create('admin_table', function (Blueprint $table) {
            $table->increments('admin_id');
            $table->string('admin_name', 100);
            $table->string('admin_email', 255);
            $table->string('admin_password');
            $table->string('admin_phone', 10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_table');
    }
};
