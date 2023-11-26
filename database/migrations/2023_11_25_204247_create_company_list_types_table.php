<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('company_list_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('active_from')->default(\Carbon\Carbon::now()->toDateString());
            $table->date('active_to')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('company_list_types');
    }
};
