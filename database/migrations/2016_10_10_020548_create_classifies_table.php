<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassifiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
		 Schema::create('classifies', function(Blueprint $table) {
			$table->increments('id');
			$table->tinyInteger('modelid')->default(0);	//模块ID
			$table->string('name',50);					//分类名称
			$table->integer('bcid')->default(0);		//大类ID
			$table->integer('scid')->default(0);		//小类ID
			$table->integer('topid')->default(0);		//父类ID
			$table->tinyInteger('grade')->default(0);	//分类级别
			$table->text('node')->nullable();			//分类从属过程
			$table->tinyInteger('navflag')->default(0);	//主导航
			$table->tinyInteger('perpage')->default(0); //是否单页 1 是 0否
			$table->string('attachment',100);			//封面
			$table->tinyInteger('isattach')->default(0);//是否有封面
			$table->integer('orderid')->default(0);		//排序
			$table->text('linkurl')->nullable();		//外链接
			$table->tinyInteger('status')->default(0);	//状态
			$table->integer('user_id');					
			$table->timestamps();
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
		Schema::drop('classifies');
    }
}