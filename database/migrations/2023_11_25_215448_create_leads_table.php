<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('contact_id')->nullable();
            $table->bigInteger('company_id');
            $table->bigInteger('user_id');
            $table->string('lead_source_id');
            $table->string('title');
            $table->text('description');
            $table->softDeletes();
            $table->timestamps();

            $table->index(['user_id'], 'leads-user_id_index');
            $table->index(['company_id'], 'leads-company_id_index');
            $table->index(['contact_id'], 'leads-contact_id_index');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('leads');
    }
};
