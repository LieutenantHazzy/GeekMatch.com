<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id()->onDelete('cascade');
            $table->string('one_time');
            $table->string('email')->unique();
            $table->string('name')->unique();
            $table->string('password')->nullable();
            $table->string('first_name')->nullable();
            $table->string('infix')->nullable();
            $table->string('last_name')->nullable();
            $table->date('dob');
            $table->integer('gender')->nullable();
            $table->integer('phone')->nullable();
            $table->string('street_nr')->nullable();
            $table->string('city')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('address')->nullable();
            $table->string('country')->nullable();
            $table->string('description')->nullable();
            $table->integer('is_enterprise')->default(0);
            $table->boolean('is_admin')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->softDeletes();
            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
