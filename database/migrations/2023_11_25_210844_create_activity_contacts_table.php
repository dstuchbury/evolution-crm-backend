<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('activity_contacts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('activity_id');
            $table->bigInteger('contact_id');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('activity_contacts');
    }
};
