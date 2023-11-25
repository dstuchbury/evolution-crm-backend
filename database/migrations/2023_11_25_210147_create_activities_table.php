<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('activities', function (Blueprint $table)
        {
            $table->id();
            $table->bigInteger('user_id');
            $table->bigInteger('company_id');
            $table->bigInteger('activity_status_id');
            $table->bigInteger('activity_type_id');
            $table->bigInteger('opportunity_id')->nullable();
            $table->dateTime('date')->default(\Carbon\Carbon::today()->toDateString());
            $table->text('notes')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};
