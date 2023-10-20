<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('client')->nullable();
            $table->string('date');
            $table->string('url')->nullable();
            $table->binary('info');
            $table->string('main_image');
            $table->string('images')->nullable();
            $table->enum('is_active',['active','not_active'])->default('active');
            $table->foreignId('category_id')->nullable()->constrained('projects_category', 'id')->nullOnDelete();
            $table->timestamps();
        });
        

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};