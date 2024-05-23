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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('model_id');
            $table->unsignedBigInteger('damage_id');
            $table->unsignedInteger('year',);
            $table->string('color');
            $table->unsignedInteger('km');
            $table->boolean('guarentee_status')->default(0);
            $table->tinyInteger('vites_turu')->comment('0-manuel 1-otomatik 2-yarıOtomatik');
            $table->tinyInteger('yakit_turu')->comment('0-dizel 1-benzin 2-benzin&lpg ');
            $table->dateTime('announcment_date');
            $table->tinyInteger('status')->comment('0-pasif 1-aktif 2-satıldı');
            $table->text('description')->nullable();
            $table->integer('fiyat');


            $table->softDeletes();
            $table->timestamps();

            $table->foreign('user_id')->on('users')->references('id')->onDelete('cascade');
            $table->foreign('model_id')->on('car_models')->references('id')->onDelete('cascade');
            $table->foreign('damage_id')->on('car_damages')->references('id')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
