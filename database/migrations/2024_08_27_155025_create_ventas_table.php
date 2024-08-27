<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->id('VentaID'); // 
            $table->date('fecha_venta');  
            $table->unsignedBigInteger('ProductoID'); 
            $table->integer('cantidad'); 
            $table->decimal('precio_unitario', 10, 2); 
            $table->decimal('total_venta', 10, 2);
            $table->timestamps(); 
            //Forany

        
            $table->foreign('ProductoID')
                ->references('ProductoID')
                ->on('productos')
                ->onUpdate('cascade')
                ->onDelete('cascade');
           
        });

      
    }                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ventas');
    }
};
