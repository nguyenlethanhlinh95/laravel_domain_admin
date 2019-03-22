<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('fullname')->nullable();;
            $table->string('address')->nullable();;
            $table->string('fonenumber')->nullable();;
            $table->string('company')->nullable();;
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('quyen')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('managedomain', function (Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->string('username');
            $table->string('namedomain');

            $table->rememberToken();
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
        Schema::dropIfExists('managedomain');
    }
}
