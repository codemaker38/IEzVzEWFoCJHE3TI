<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDetailsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('name', 100)->change();
            $table->string('last_name', 100)->after('name');
            $table->string('email', 100)->change();
            $table->string('company')->nullable()->after('remember_token');
            $table->text('description')->nullable()->after('company');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('name')->change();
            $table->dropColumn('last_name');
            $table->string('email')->change();
            $table->dropColumn('company');
            $table->dropColumn('description');
            $table->dropSoftDeletes();
        });
    }
}
