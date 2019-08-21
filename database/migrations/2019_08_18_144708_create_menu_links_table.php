<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_links', function (Blueprint $table) {
            $table->unsignedBigInteger('menu_id')->index();
            $table->unsignedBigInteger('link_id')->index();
            $table->integer('order')->default(1);
            $table->unsignedBigInteger('parent_id')->nullable()->index();
        });

        Schema::table('menu_links', function (Blueprint $table) {
           $table->foreign('menu_id')->references('id')->on('menus');
           $table->foreign('link_id')->references('id')->on('links');
           $table->foreign('parent_id')->references('id')->on('links');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('menu_links', function (Blueprint $table) {
            $table->dropForeign('menu_links_menu_id_foreign');
            $table->dropForeign('menu_links_link_id_foreign');
            $table->dropForeign('menu_links_parent_id_foreign');
        });
        Schema::dropIfExists('menu_links');
    }
}
