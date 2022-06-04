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
        Schema::create('event_types', function (Blueprint $table) {
            $table->id();
            $table->string('hex', 11)->unique();
            $table->integer('user_id')->nullable();
            $table->integer('event_category_id');
            $table->string('name');
            $table->string('slug');
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
            $table->boolean('active')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_types');
    }
};
