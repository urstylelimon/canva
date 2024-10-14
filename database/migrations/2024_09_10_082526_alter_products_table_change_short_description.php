<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeFaqsColumnTypeInProductsTable extends Migration
{
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            // Change the column type from JSON to TEXT
            $table->text('faqs')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            // Revert back to the original JSON type
            $table->json('faqs')->nullable()->change();
        });
    }
}
