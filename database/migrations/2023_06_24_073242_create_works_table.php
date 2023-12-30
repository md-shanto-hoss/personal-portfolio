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
        Schema::create('works', function (Blueprint $table) {
            $table->id();
            $table->string('category_name')->nullable();
            $table->string('project_name')->nullable();
            $table->string('project_url')->nullable();
            $table->text('complete_date')->nullable();
            $table->string('client_name')->nullable();
            $table->string('industry_name')->nullable();
            $table->string('technologist')->nullable();
            $table->text('project_description')->nullable();
            $table->text('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('works');
    }
};
