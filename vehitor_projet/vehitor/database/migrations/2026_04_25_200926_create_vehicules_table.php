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
        Schema::create('vehicules', function (Blueprint $table) {
            $table->id();
            $table->string('marque');
            $table->string('modele');
            $table->year('annee');
            $table->string('matricule')->unique();
            $table->enum('categorie', ['mini', 'citadine', 'compacte', 'berline', 'luxe', 'suv', 'coupé']);
            $table->string('couleur');
            $table->enum('etat', ['neuve', 'bon_etat', 'a_restaurer', 'epave ', 'inonde']);
            $table->decimal('prix_par_jour', 8, 2);
            $table->enum('disponibilite', ['disponible', 'loue', 'en_maintenance'])->default('disponible');
            $table->string('photo')->nullable();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicules');
    }
};
