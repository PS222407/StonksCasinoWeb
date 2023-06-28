<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardSkinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('card_skins', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('web_img_path');
            $table->longText('wpf_img_path');
            $table->integer('price');
            $table->longText('wpf_card_map');
            $table->timestamps();
        });

        \App\Models\card_skin::insert([
            [
                'name' => 'Default',
                'web_img_path' => 'img/card/default.png',
                'wpf_img_path' => '/Img/cardskins/Default.png',
                'price' => 0,
                'wpf_card_map' => 'Default',
            ],
            [
                'name' => 'Silver Gold',
                'web_img_path' => 'img/card/golden-card.png',
                'wpf_img_path' => 'idunno',
                'price' => 5,
                'wpf_card_map' => 'SilverGold',
            ],
            [
                'name' => 'Neon Red Blue',
                'web_img_path' => 'img/card/neonredblue.png',
                'wpf_img_path' => 'idunno',
                'price' => 2,
                'wpf_card_map' => 'NeonRedBlue',
            ],
            [
                'name' => 'Amethist',
                'web_img_path' => 'img/card/Amethis-card.png',
                'wpf_img_path' => 'idunno',
                'price' => 5,
                'wpf_card_map' => 'Amethist',
            ],
            [
                'name' => 'Neon Orange Yellow',
                'web_img_path' => 'img/card/neonorangeyellow.png',
                'wpf_img_path' => 'idunno',
                'price' => 2,
                'wpf_card_map' => 'NeonOrangeYellow',
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('card_skins');
    }
}
