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
        Schema::create('group_library_profile', function (Blueprint $table) {
            $table->primary(['group_library_id', 'profile_id']);
            $table->timestamps();

            $table->bigInteger('profile_id')->unsigned();
            $table->bigInteger('group_library_id')->unsigned();

            $table->foreign('profile_id')->references('id')->on('profiles')
                ->onDelete('cascade')->onUpdate('cascade');
            
            $table->foreign('group_library_id')->references('id')->on('group_libraries')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('group_library_profile');
    }
};
