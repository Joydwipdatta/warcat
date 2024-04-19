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
        Schema::create('assign_depts', function (Blueprint $table) {
            $table->id();
            // $table->string('department');
            // $table->string('director');

            $table->unsignedBigInteger('director_id');
            $table->foreign('director_id')->references('id')->on('directors')->onDelete('cascade');
            $table->unsignedBigInteger('department_id')->unique();
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
            // $table->unique(['director_id', 'department_id']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assign_depts');
    }
};
