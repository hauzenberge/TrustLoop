                                    0nbbbbb<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('surveys', function (Blueprint $table) {
            $table->boolean('static_request_widget')->default(true);
            $table->boolean('exit_intent_feedback_popup')->default(true);
            $table->boolean('hide_modal')->default(false);        
            $table->integer('hide_for_months')->default(30); 
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('surveys', function (Blueprint $table) {
            $table->dropColumn('static_request');
        });
    }
};
