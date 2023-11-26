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

            $table->index(['legal_name'], 'legal_name_index');
            $table->index(['trading_name'], 'trading_name_index');
            $table->index(['company_type_id'], 'company_type_id_index');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
