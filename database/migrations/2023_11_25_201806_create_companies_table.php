<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up(): void {
        Schema::create('companies', function (Blueprint $table)
        {
            $table->id();
            $table->bigInteger('company_type_id');
            $table->string('legal_name')->nullable();
            $table->string('trading_name')->nullable();

            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
