<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserGithubTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_github', function (Blueprint $table) {
            $table->id();
            $table->string('avatar_url')->nullable();
            $table->string('login')->unique();
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('company')->nullable();
            $table->string('location')->nullable();
            $table->string('html_url')->unique();
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
        Schema::dropIfExists('user_github');
    }
}
