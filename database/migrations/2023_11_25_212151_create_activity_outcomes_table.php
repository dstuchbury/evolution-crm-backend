<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('activity_outcomes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('activity_id');
            $table->bigInteger('activity_outcome_type_id');
            $table->decimal('confidence_weight_applied')->nullable();
            $table->dateTime('date');
            $table->text('notes')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('activity_outcomes');
    }
};
