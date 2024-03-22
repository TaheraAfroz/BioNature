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
        Schema::create('userprofile', function (Blueprint $table) {
            $table->id();
            $table->string('address');
            $table->char('profile_picture');
            $table->date('dob');
            $table->bigInteger('user_id');
            $table->string('gender');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('userprofile');
    }
};
