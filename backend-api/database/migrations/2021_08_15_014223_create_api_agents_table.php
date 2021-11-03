<?php
/*
 * Copyright (c) 2021. Debugger Tech
 * All Rights Reserved.
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApiAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('api_agents', function (Blueprint $table) {
            $table->id();
            $table->string('name', 55);
            $table->string('key', 16)->unique();
            $table->string('secret', 1024);
            $table->enum('target', ['android', 'ios', 'web'])->default('web');
            $table->json('hosts')->nullable();
            $table->boolean('active')->default(false);
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
        Schema::dropIfExists('api_agents');
    }
}
