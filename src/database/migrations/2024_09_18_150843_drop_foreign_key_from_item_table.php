<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropForeignKeyFromItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::table('items', function (Blueprint $table) {
        $table->dropForeign(['buyer_id']); // buyer_id に対する外部キー制約を削除
    });
}

    public function down()
{
    Schema::table('items', function (Blueprint $table) {
        // 外部キー制約を再度追加
        $table->foreign('buyer_id')->references('id')->on('users')->onDelete('cascade');
    });
}
}
