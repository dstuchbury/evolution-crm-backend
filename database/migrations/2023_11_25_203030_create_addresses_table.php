<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('line_1');
            $table->string('line_2')->nullable();
            $table->string('line_3')->nullable();
            $table->string('town_city');
            $table->string('county_region')->nullable();
            $table->string('postcode_zip')->nullable();
            $table->string('country_name')->nullable();
            $table->string('country_code')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->index(['country_name'], 'country_name_index');
            $table->index(['country_code'], 'country_code_index');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
