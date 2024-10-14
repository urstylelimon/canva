<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('items', function (Blueprint $table) {
            $table->date('due_date')->nullable();  // Stores the date
            $table->time('due_time')->nullable();  // Stores the time
        });
    }
    
    public function down()
    {
        Schema::table('items', function (Blueprint $table) {
            $table->dropColumn(['due_date', 'due_time']);
        });
    }
    
};
