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
        Schema::table('data', function (Blueprint $table) {
            $table->date('last_coming_date_to_egypt')->after('entry_date')->nullable();
            $table->string('last_coming_country_from')->after('last_coming_date_to_egypt');
            $table->string('cause_of_visiting')->after('last_coming_country_from');
            $table->string('friend_address')->after('cause_of_visiting');
            $table->string('friend_phone')->after('friend_address');
            $table->text('number_of_visits')->after('friend_phone');
            $table->text('security_problem')->after('number_of_visits');
            $table->text('last_reachToEgypt_image')->after('security_problem');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('data', function (Blueprint $table) {
            $table->dropColumn('last_coming_date_to_egypt');
            $table->dropColumn('last_coming_country_from');
            $table->dropColumn('cause_of_visiting');
            $table->dropColumn('friend_address');
            $table->dropColumn('friend_phone');
            $table->dropColumn('number_of_visits');
            $table->dropColumn('security_problem');
            $table->dropColumn('last_reachToEgypt_image');
        });
    }
};
