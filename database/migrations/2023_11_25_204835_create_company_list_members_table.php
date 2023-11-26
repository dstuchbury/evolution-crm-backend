<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration{
    public function up(): void
    {
        Schema::create('company_list_members', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('company_list_id');
            $table->bigInteger('company_id');
            $table->date('from_date')->default(\Carbon\Carbon::today()->toDateString());
            $table->date('to_date')->nullable();

            $table->timestamps();

            $table->index(['company_id', 'company_list_id'], 'company_id_company_list_id_index');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('company_list_members');
    }
};
