<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddModuleIdToNewProductModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('new_product_modules', function (Blueprint $table) {
            $table->unsignedBigInteger('module_id')->after('new_product_id'); // Add module_id column

            // Add a foreign key constraint if you have a modules table
            $table->foreign('module_id')->references('id')->on('modules')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('new_product_modules', function (Blueprint $table) {
            $table->dropForeign(['module_id']);
            $table->dropColumn('module_id');
        });
    }
}
