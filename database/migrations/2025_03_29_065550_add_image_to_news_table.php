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
    Schema::table('news', function (Blueprint $table) {
        $table->string('image')->nullable()->after('title'); // Thêm cột image sau cột title
    });
}

public function down()
{
    Schema::table('news', function (Blueprint $table) {
        $table->dropColumn('image');
    });
}

};
