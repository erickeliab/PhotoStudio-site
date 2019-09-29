<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPromotionToServices extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('services', function (Blueprint $table) {
            
            $table->boolean('onpromotion')->nullable()->default(false);
            
            $table->string('promoprice', 100)->nullable()->default(NULL);
            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('services', function (Blueprint $table) {
            
            $table->dropColumn('onpromotion');
            
            $table->dropColumn('promoprice');
            
            
        });
    }
}
