<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('projects_tags', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->constrained('projects', 'id')->cascadeOnDelete();
            $table->foreignId('tag_id')->constrained('tags', 'id')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects_tags');
    }
};
