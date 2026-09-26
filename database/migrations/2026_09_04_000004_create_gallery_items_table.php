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
        Schema::create('gallery_items', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('eyebrow')->nullable()->default('Inside Project Cham');
            $table->text('caption')->nullable();
            $table->string('alt_text')->nullable();
            $table->string('image');
            $table->string('image_position')->default('center 50%');
            $table->integer('order')->default(1)->index();
            $table->string('layout_span')->default('standard'); // 'featured', 'standard', 'compact'
            $table->boolean('is_active')->default(true)->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gallery_items');
    }
};
