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
        Schema::create('libraries', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            // Table Columns
            $table->string('name');
            $table->integer('total_beats')->nullable();
            // Profile foreign key
            $table->bigInteger('profile_id')->unsigned();
            /**
             * Foreign Referential Constraint on Profile
             */
            $table->foreign('profile_id')->references('id')->on('profiles')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libraries');
    }
};
