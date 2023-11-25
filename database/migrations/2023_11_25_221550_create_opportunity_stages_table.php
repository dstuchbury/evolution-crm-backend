<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('opportunity_stages', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('pipeline_stage_id');
            $table->bigInteger('opportunity_id');

            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('opportunity_stages');
    }
};
