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
        Schema::table('invitations', function (Blueprint $table) {
            $table->string('bride_parents')->nullable();
            $table->string('groom_parents')->nullable();
            $table->string('bride_ig')->nullable();
            $table->string('groom_ig')->nullable();
            $table->string('akad_time')->nullable();
            $table->string('akad_location')->nullable();
            $table->text('akad_address')->nullable();
            $table->string('resepsi_time')->nullable();
            $table->string('resepsi_location')->nullable();
            $table->text('resepsi_address')->nullable();
            $table->text('maps_url')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('invitations', function (Blueprint $table) {
            $table->dropColumn([
                'bride_parents', 'groom_parents', 'bride_ig', 'groom_ig',
                'akad_time', 'akad_location', 'akad_address',
                'resepsi_time', 'resepsi_location', 'resepsi_address', 'maps_url'
            ]);
        });
    }
};
