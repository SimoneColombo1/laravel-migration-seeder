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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string("Azienda");
            $table->string("Stazione_di_partenza");
            $table->string("Stazione_di_arrivo");
            $table->date("Data_di_partenza");
            $table->time("Orario_di_partenza");
            $table->date("Data_di_arrivo");
            $table->time("Orario_di_arrivo");
            $table->tinyInteger("Numero_Carrozze")->unsigned();
            $table->string("In_orario");
            $table->string("Cancellato");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};