<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRelatioshipBookinstable2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bookins', function (Blueprint $table) {
            //
        });
    }
	
	
	public function employees()
	{
		return $this->belongsTo('employee');
	}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bookins', function (Blueprint $table) {
            //
        });
    }
}
