<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('company_id');
            $table->string('title');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('position');
            $table->softDeletes();
            $table->timestamps();

            $table->index(['company_id'], 'company_id_index');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
