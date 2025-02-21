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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            //المستخدم
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            //الطبيب
            $table->foreignId('doctor_id')->constrained('doctors')->onDelete('cascade');
            //الموعد
            $table->foreignId('time_slot_id')->constrained('time_slots')->onDelete('cascade');
            //تاريخ الموعد
            $table->date('date');
            //حالة الموعد
            $table->enum('status', ['pending', 'confirmed', 'cancelled'])->default('pending');
            //سبب الالغاء
            $table->json('reason')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
