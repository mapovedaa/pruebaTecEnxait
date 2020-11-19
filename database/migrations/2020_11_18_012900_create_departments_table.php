<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('name');
            $table->timestamps();
        });

        DB::table('departments')->insert([
            ['id' => 5, 'name' => 'ANTIOQUIA'],
            ['id' => 8, 'name' => 'ATLÁNTICO'],
            ['id' => 11, 'name' => 'BOGOTÁ, D.C.'],
            ['id' => 13, 'name' => 'BOLÍVAR'],
	        ['id' => 15, 'name' => 'BOYACÁ'],
	        ['id' => 17, 'name' => 'CALDAS'],
	        ['id' => 18, 'name' => 'CAQUETÁ'],
	        ['id' => 19, 'name' => 'CAUCA'],
	        ['id' => 20, 'name' => 'CESAR'],
	        ['id' => 23, 'name' => 'CÓRDOBA'],
	        ['id' => 25, 'name' => 'CUNDINAMARCA'],
	        ['id' => 27, 'name' => 'CHOCÓ'],
	        ['id' => 41, 'name' => 'HUILA'],
	        ['id' => 44, 'name' => 'LA GUAJIRA'],
	        ['id' => 47, 'name' => 'MAGDALENA'],
	        ['id' => 50, 'name' => 'META'],
	        ['id' => 52, 'name' => 'NARIÑO'],
	        ['id' => 54, 'name' => 'NORTE DE SANTANDER'],
	        ['id' => 63, 'name' => 'QUINDIO'],
	        ['id' => 66, 'name' => 'RISARALDA'],
	        ['id' => 68, 'name' => 'SANTANDER'],
	        ['id' => 70, 'name' => 'SUCRE'],
	        ['id' => 73, 'name' => 'TOLIMA'],
	        ['id' => 76, 'name' => 'VALLE DEL CAUCA'],
	        ['id' => 81, 'name' => 'ARAUCA'],
	        ['id' => 85, 'name' => 'CASANARE'],
	        ['id' => 86, 'name' => 'PUTUMAYO'],
	        ['id' => 88, 'name' => 'ARCHIPIÉLAGO DE SAN ANDRÉS, PROVIDENCIA Y SANTA CATALINA'],
	        ['id' => 91, 'name' => 'AMAZONAS'],
	        ['id' => 94, 'name' => 'GUAINÍA'],
	        ['id' => 95, 'name' => 'GUAVIARE'],
	        ['id' => 97, 'name' => 'VAUPÉS'],
	        ['id' => 99, 'name' => 'VICHADA'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('departments');
    }
}