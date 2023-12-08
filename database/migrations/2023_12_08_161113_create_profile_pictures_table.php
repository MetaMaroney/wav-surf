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
        Schema::create('profile_pictures', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            // Table cloumns
            $table->string('image_URL')->nullable();
            $table->bigInteger('profile_id')->unsigned();
            /**
             * Referentail Integrity Constraint on Profile
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
        Schema::dropIfExists('profile_pictures');
    }
};
