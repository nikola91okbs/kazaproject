<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Artist;

class ArtistsDataMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Artist::create([
            'title' => 'Test Artist',
            'description' => 'Test Artist',
            'category_id' => 1]);

        Artist::create([
            'title' => 'Ceca',
            'location' => 'Belgrade, Serbia',
            'views' => 3,
            'price' => 1200,
            'description' => 'Balkan singer',
            'category_id' => 1]);
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
