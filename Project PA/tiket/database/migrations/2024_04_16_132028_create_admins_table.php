<?php

USE Illuminate\DATABASE\Migrations\Migration;
USE Illuminate\DATABASE\SCHEMA\Blueprint;
USE Illuminate\Support\Facades\SCHEMA;

RETURN NEW class extends Migration
{
    /**
     * Run the migrations.
     */
    public FUNCTION up(): void
    {
        SCHEMA::CREATE('admins', FUNCTION (Blueprint $TABLE) {
            $TABLE->id();
            $TABLE->STRING('email')->UNIQUE();
            $TABLE->STRING('password');
            $TABLE->TIMESTAMP('email_verified_at')->nullable();
            $TABLE->rememberToken();
            $TABLE->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public FUNCTION down(): void
    {
        SCHEMA::dropIfExists('admins');
    }
};
