<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->enum('user_type', ['user', 'admin'])->default('user');
            $table->string('avatar')->default('/default/avatar.png');
            $table->string('banner')->default('/default/breadcroumb.jpg');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('about')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('website')->nullable();
            $table->string('fb_link')->nullable();
            $table->string('x_link')->nullable();
            $table->string('in_link')->nullable();
            $table->string('wa_link')->nullable();
            $table->string('insta_link')->nullable();

            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
