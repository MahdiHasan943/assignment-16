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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();                      // id BIGINT (auto increment primary key)
            $table->string('name');            // name VARCHAR
            $table->foreignId('user_id')      // user_id BIGINT foreign key
                  ->constrained('users')      // references id on users table
                  ->onDelete('cascade');
            $table->timestamps();             // created_at, updated_at TIMESTAMP
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
};
