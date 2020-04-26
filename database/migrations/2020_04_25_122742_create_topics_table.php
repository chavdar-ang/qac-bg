<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateTopicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topics', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->timestamps();
        });

        DB::table('topics')->insert([
            [
                'name' => 'Quality Management System (QMS)',
                'slug' => 'quality-management-system'
            ],
            [
                'name' => 'Product Development',
                'slug' => 'product-development'
            ],
            [
                'name' => 'Medical Devices',
                'slug' => 'medical-devices'
            ],
            [
                'name' => 'QMS Software',
                'slug' => 'qms-software'
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('topics');
    }
}
