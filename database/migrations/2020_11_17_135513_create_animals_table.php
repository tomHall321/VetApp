<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("name", 100);
            $table->date("date_of_birth", 12);
            $table->enum("biteyness", [1,2,3,4,5]);
            $table->string("type", 30);
            $table->decimal("height", 10,2);
            $table->decimal("weight", 10,2);

            $table->foreignId('owner_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    
    public function down()
    {
        Schema::table('animals', function (Blueprint $table) 
        {
            $table->dropForeign(['owner_id']);
            $table->dropColumn("owner_id");

        });
        
        Schema::dropIfExists('animals');

}
}
