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
        Schema::table('team_members', function (Blueprint $table) {
            $table->string('slug')->nullable()->unique()->after('name');
            $table->string('email')->nullable()->after('role');
            $table->string('linkedin_url')->nullable()->after('email');
            $table->string('twitter_url')->nullable()->after('linkedin_url');
            $table->string('specialty')->nullable()->after('role');
            $table->text('quote')->nullable()->after('bio');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('team_members', function (Blueprint $table) {
            $table->dropColumn(['slug', 'email', 'linkedin_url', 'twitter_url', 'specialty', 'quote']);
        });
    }
};
