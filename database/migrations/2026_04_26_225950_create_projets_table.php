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
        Schema::create('projets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('priority');
            $table->string('couleur', 7)->nullable();
            $table->text('description')->nullable();
            $table->enum('statut', ['en_attente', 'en_cours', 'termine'])
                ->default('en_attente');
            $table->date('start_date')->nullable();
            $table->date('due_date')->nullable();
            $table->foreignId('owner_id')
                ->nullable()
                ->constrained('users')
                ->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projets');
        Schema::table('projets', function (Blueprint $table) {
        $table->dropColumn('couleur');
    });
    }
};
