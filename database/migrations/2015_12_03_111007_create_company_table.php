<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
        });
        
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('cnpj', 20);
            $table->string('address');
            $table->string('phone');
            $table->string('web');
            $table->string('email');
            $table->integer('company_type_id')->nullable()->unsigned();
            $table->integer('created_by')->nullable()->unsigned();
            $table->integer('updated_by')->nullable()->unsigned();
            $table->timestamps();
            $table->softDeletes();
                
            $table->foreign('company_type_id')->references('id')->on('company_types');
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
        });
        
        Schema::create('projects_has_companies', function (Blueprint $table) {
            $table->integer('project_id')->nullable()->unsigned();
            $table->integer('company_id')->nullable()->unsigned();
            $table->integer('company_type_id')->nullable()->unsigned();
            
            $table->foreign('project_id')->references('id')->on('projects');
            $table->foreign('company_id')->references('id')->on('companies');
            $table->foreign('company_type_id')->references('id')->on('company_types');
        });
        
        Schema::create('visits', function (Blueprint $table) {
            $table->increments('id');
            $table->text('comments');
            $table->date('visited_at');
            $table->integer('company_id')->nullable()->unsigned();
            $table->integer('user_id')->nullable()->unsigned();
            $table->integer('created_by')->nullable()->unsigned();
            $table->integer('updated_by')->nullable()->unsigned();
            $table->timestamps();
            
            $table->foreign('company_id')->references('id')->on('companies');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('visitis');
        Schema::drop('projects_has_companies');
        Schema::drop('companies');
        Schema::drop('company_types');
    }
}
