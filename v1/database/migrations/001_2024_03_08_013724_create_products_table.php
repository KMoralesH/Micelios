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
        Schema::create('product_details', function (Blueprint $table) {
            $table->id();
<<<<<<<< HEAD:v1/database/migrations/2024_03_04_012917_create_product_details_table.php
========
            $table->string('product_name');
>>>>>>>> develop:v1/database/migrations/001_2024_03_08_013724_create_products_table.php
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_details');
    }
};
