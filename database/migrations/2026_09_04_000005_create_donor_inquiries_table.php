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
        Schema::create('donor_inquiries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->index();
            $table->string('phone')->nullable();
            $table->string('involvement_type')->default('support_child'); // 'support_child', 'partner', 'general_donation', 'advocate'
            $table->string('pledge_amount')->nullable();
            $table->string('frequency')->default('one_time'); // 'one_time', 'monthly', 'annual', 'other'
            $table->text('message')->nullable();
            $table->string('status')->default('new')->index(); // 'new', 'contacted', 'in_progress', 'pledged', 'closed'
            $table->text('admin_notes')->nullable();
            $table->timestamp('contacted_at')->nullable();
            $table->string('ip_address', 45)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donor_inquiries');
    }
};
