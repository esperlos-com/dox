<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('documents', function (Blueprint $table) {
            $table->foreign('version_id')->references('id')->on('versions')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('menu_id')->references('id')->on('menus')->onUpdate('cascade')->onDelete('cascade');

        });

       Schema::table('document_tl', function (Blueprint $table) {
            $table->foreign('language_id')->references('id')->on('languages')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('document_id')->references('id')->on('documents')->onUpdate('cascade')->onDelete('cascade');

        });

        Schema::table('menus', function (Blueprint $table) {
            $table->foreign('pid')->references('id')->on('menus')->onUpdate('cascade')->onDelete('cascade');

        });

        Schema::table('menu_tl', function (Blueprint $table) {
            $table->foreign('menu_id')->references('id')->on('menus')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('language_id')->references('id')->on('languages')->onUpdate('cascade')->onDelete('cascade');

        });


        Schema::table('settings', function (Blueprint $table) {
            $table->foreign('version_id')->references('id')->on('versions')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('language_id')->references('id')->on('languages')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('default_language_id')->references('id')->on('languages')->onUpdate('cascade')->onDelete('cascade');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foreign_keys');
    }
};
