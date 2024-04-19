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
        Schema::create('sec_assigns', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('secretary_id');
            $table->foreign('secretary_id')->references('id')->on('secretaries')->onDelete('cascade');

            $table->unsignedBigInteger('department_id')->unique();
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sec_assigns');
    }
};
