<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCashbookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('bank', 4);
            $table->string('account', 20);
            $table->integer('project_id')->nullable()->unsigned();
            $table->softDeletes();
            $table->timestamps();
            
            $table->foreign('project_id')->references('id')->on('projects');
        });
        
        Schema::create('cachbooks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('detail', 255);
            $table->date('date');
            $table->decimal('value', 12, 2); 
            $table->integer('account_id')->nullable()->unsigned();
            $table->softDeletes();
            $table->timestamps();
            
            $table->foreign('account_id')->references('id')->on('accounts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
