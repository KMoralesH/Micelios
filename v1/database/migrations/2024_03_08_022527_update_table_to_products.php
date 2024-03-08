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
        Schema::table('products', function (Blueprint $table) {
            // $table->unsignedBigInteger('category_id')->after('id');
            // $table->foreign('category_id')->references('id')->on('categories');

            $table->foreignId('category_id')->after('id')->constrained();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            //
            // $table->dropColumn('category_id');
            // $table->dropForeign('category_id')->references('id')->on('categories');

            $table->dropForeign('category_id');

        });
    }
};
