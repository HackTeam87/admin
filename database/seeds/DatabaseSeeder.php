<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Calendar;
use App\User;
use App\ProductSlider;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

//       User::create(
//            [
//                'id'=> '8',
//                'name' => 'admin3',
//                'email' => 'admin3@gmail.com',
//                'password'=>'admin123',
//
//            ]);

       ProductSlider::create([
          'title' => 'Бездротовий маршрутизатор TP-LINK Archer C20',
          'price' => '1200',
          'text' => '<p>Стандарт бездротового зв&rsquo;язку&nbsp;&nbsp;Wi-Fi 802.11 b / g / n&nbsp; Робота у двох діапазонах (dual band)&nbsp;&nbsp;2.4 GHz / 5.0 GHz&nbsp; Інтерфейс підключення (LAN-порт)&nbsp;&nbsp;4x 10/100 Ethernet&nbsp; Вхід (WAN-порт)&nbsp;&nbsp;1x 10/100 Ethernet&nbsp; USB&nbsp;&nbsp;немає</p>
',
           '1517385321.jpg"'
       ]);
    }
}
