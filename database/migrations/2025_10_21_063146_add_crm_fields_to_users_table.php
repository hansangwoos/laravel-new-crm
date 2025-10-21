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
        Schema::table('users', function (Blueprint $table) {
            // 사용자 화
            $table->integer('team_id')->nullable()->comment("소속 팀 id");
            $table->integer('pos')->nullable()->comment("직급");
            $table->integer('level')->default(1)->comment("사용자 권한 레벨");
            $table->datetime("last_login_at")->nullable()->comment("마지막 로그인 시간");
            $table->string("login_ip")->nullable()->comment("마지막 로그인 IP 주소");
            $table->boolean('is_active')->default(true)->comment("활성 상태");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
