<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration{
    public function up(): void
    {
        Schema::create('company_list_members', function (Blueprint $table) {
            $table->id();



            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('company_list_members');
    }
};
