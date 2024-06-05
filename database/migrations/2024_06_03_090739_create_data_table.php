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
        Schema::create('data', function (Blueprint $table) {
            $table->id();
            $table->text('passport_image');
            $table->text('profile_image');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('second_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->date('birth_date');
            $table->string('birth_place');
            $table->string('gender');
            $table->string('nationality');
            $table->string('country');
            $table->text('passport_number');
            $table->text('passport_type');
            $table->date('passport_date');
            $table->date('passport_expire_date');
            $table->string('passport_issue_place');
            $table->string('mobile_number');
            $table->string('email');
            $table->string('emergency_contact_name');
            $table->string('emergency_contact_country');
            $table->string('emergency_contact_city');
            $table->string('emergency_contact_address');
            $table->string('emergency_contact_email');
            $table->string('emergency_contact_home_phone');
            $table->string('emergency_contact_mobile_phone');
            $table->string('emergency_contact_postal_code');
            $table->string('emergency_contact_postal_box');
            $table->string('notification_language');
            $table->string('profession');
            $table->string('entry_type');
            $table->string('entry_port');
            $table->date(
                'entry_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data');
    }
};
