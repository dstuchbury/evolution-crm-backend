<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('opportunity_contacts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('opportunity_id');
            $table->bigInteger('contact_id');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('opportunity_contacts');
    }
};
