<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('company_addresses', function (Blueprint $table)
        {
            $table->id();
            $table->bigInteger('company_id');
            $table->bigInteger('address_id');
            $table->date('from_date')->default(\Carbon\Carbon::now()->toDateString());
            $table->date('to_date')->nullable();

            $table->softDeletes();
            $table->timestamps();

            $table->index(['company_id'], 'companyies-addresses_company_id_index');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('company_addresses');
    }
};
