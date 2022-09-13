<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PreimenujKolonu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kategorijas', function (Blueprint $table) {
            
            $table->renameColumn('naziv','naziv_kategorije');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kategorijas', function (Blueprint $table) {
            
            $table->renameColumn('naziv_kategorije','naziv');
            
        });
    }
}
