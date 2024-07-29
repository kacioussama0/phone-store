<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('device_issues', function (Blueprint $table) {
            $table->unsignedBigInteger('device_id');
            $table->unsignedBigInteger('issue_id');
            $table->primary(['device_id', 'issue_id']);
            $table->foreign('device_id')->references('id')->on('devices');
            $table->foreign('issue_id')->references('id')->on('issues');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('device_issues');
    }
};
