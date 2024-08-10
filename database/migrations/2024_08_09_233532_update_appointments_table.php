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
        Schema::table('appointments', function (Blueprint $table) {
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('phone');
            $table->unsignedBigInteger('device_id');
            $table->foreign('device_id')->references('id')->on('devices');
            $table->string('issues');
            $table->date('appointment_date');
            $table->string('appointment_time');
            $table->string('token')->nullable();
            $table->softDeletes()->after('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('appointments', function (Blueprint $table) {
            $table->dropColumn('first_name');
            $table->dropColumn('last_name');
            $table->dropColumn('email');
            $table->dropColumn('phone');
            $table->dropColumn('device_id');
            $table->dropForeign('appointments_device_id_foreign');
            $table->dropColumn('issues');
            $table->dropColumn('appointment_date');
            $table->dropColumn('appointment_time');
            $table->dropSoftDeletes();
        });
    }
};
