<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('opportunities', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->bigInteger('company_id');
            $table->string('lead_id');
            $table->string('title');
            $table->string('description');
            $table->decimal('value');
            $table->decimal('current_confidence_weighting');
            $table->softDeletes();
            $table->timestamps();

            $table->index(['user_id'], 'opportunities-user_id_index');
            $table->index(['company_id'], 'opportunities-company_id_index');
            $table->index(['company_id', 'current_confidence_weighting'], 'opportunities-company_id_confidence_weighting_index');
            $table->index(['current_confidence_weighting'], 'opportunities-confidence_weighting_index');
        });
    }

    public function down(): void {
        Schema::dropIfExists('opportunities');
    }
};
