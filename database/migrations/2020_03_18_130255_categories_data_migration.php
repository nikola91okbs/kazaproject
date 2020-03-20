<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Category;

class CategoriesDataMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Category::create([
            'name' => 'Vedushie',
            'is_it_service' => 0]);

        Category::create([
            'name' => 'Zvezdy',
            'is_it_service' => 0]);

        Category::create([
            'name' => 'Vokalisty',
            'is_it_service' => 0]);

        Category::create([
            'name' => 'VIA',
            'is_it_service' => 0]);

        Category::create([
            'name' => 'Originalnyi_zhanr',
            'is_it_service' => 0]);

        Category::create([
            'name' => 'Detyam',
            'is_it_service' => 0]);

        Category::create([
            'name' => 'Tancevalnye_kollektivy',
            'is_it_service' => 0]);

        Category::create([
            'name' => 'Instrumentalisty',
            'is_it_service' => 0]);

        Category::create([
            'name' => 'DJ_didzhei',
            'is_it_service' => 0]);

        Category::create([
            'name' => 'Bloggery',
            'is_it_service' => 0]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
