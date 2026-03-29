<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('templates', function (Blueprint $row) {
            $row->id();
            $row->string('name');
            $row->string('slug')->unique();
            $row->string('preview_image')->nullable();
            $row->text('description')->nullable();
            $row->boolean('is_active')->default(true);
            $row->timestamps();
        });

        Schema::create('invitations', function (Blueprint $row) {
            $row->id();
            $row->foreignId('template_id')->constrained()->onDelete('cascade');
            $row->string('slug')->unique();
            $row->string('bride_name');
            $row->string('groom_name');
            $row->date('wedding_date');
            $row->string('location');
            $row->string('music_url')->nullable();
            $row->json('additional_data')->nullable(); // For custom fields
            $row->boolean('is_active')->default(true);
            $row->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('invitations');
        Schema::dropIfExists('templates');
    }
};
