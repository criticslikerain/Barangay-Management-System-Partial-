<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('blotters', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); 
            $table->timestamp('incident_time'); 
            $table->string('incident_location'); 
            $table->text('incident_description');
            $table->string('type_of_incident'); 
            $table->text('involved_parties'); 
            $table->text('witnesses'); 
            $table->text('desired_resolution'); 
            $table->timestamps(); 
            $table->string('status'); 
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blotters');
    }
};
