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
        Schema::create('category_product_table', function (Blueprint $table) {
            $table->increments('product_id');
            $table->string('product_name');
            $table->integer('price');
            $table->integer('amount');
            $table->string('size');
            $table->string('producer');
            $table->string('created_by');
            $table->timestamp('created_at')->useCurrent();
            $table->string('updated_by')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->integer('product_status')->default(1);
            $table->string('comment', 255);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category_product_table');
    }
};
