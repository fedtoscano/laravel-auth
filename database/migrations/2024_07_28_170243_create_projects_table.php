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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nome del progetto
            $table->text('description')->nullable(); // Descrizione del progetto
            $table->string('client')->nullable(); // Cliente
            $table->date('start_date')->nullable(); // Data di inizio
            $table->date('end_date')->nullable(); // Data di fine
            $table->string('status')->default('in progress'); // Stato del progetto
            $table->decimal('budget', 15, 2)->nullable(); // Budget
            $table->string('repository')->nullable(); // URL del repository di codice
            $table->string('tech_stack')->nullable(); // Stack tecnologico utilizzato
            $table->string('project_manager')->nullable(); // Nome del project manager
            $table->string('team_members')->nullable(); // Membri del team
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
