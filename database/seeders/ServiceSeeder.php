<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $cities = [
            'Adana','Adıyaman','Afyonkarahisar','Ağrı','Aksaray','Amasya','Ankara','Antalya',
            'Ardahan','Artvin','Aydın','Balıkesir','Bartın','Batman','Bayburt','Bilecik',
            'Bingöl','Bitlis','Bolu','Burdur','Bursa','Çanakkale','Çankırı','Çorum',
            'Denizli','Diyarbakır','Düzce','Edirne','Elazığ','Erzincan','Erzurum',
            'Eskişehir','Gaziantep','Giresun','Gümüşhane','Hakkari','Hatay','Iğdır',
            'Isparta','İstanbul','İzmir','Kahramanmaraş','Karabük','Karaman','Kars',
            'Kastamonu','Kayseri','Kırıkkale','Kırklareli','Kırşehir','Kilis','Kocaeli',
            'Konya','Kütahya','Malatya','Manisa','Mardin','Mersin','Muğla','Muş',
            'Nevşehir','Niğde','Ordu','Osmaniye','Rize','Sakarya','Samsun','Siirt',
            'Sinop','Sivas','Şanlıurfa','Şırnak','Tekirdağ','Tokat','Trabzon','Tunceli',
            'Uşak','Van','Yalova','Yozgat','Zonguldak'
        ];

        $services = [
            'Elektrikçi',
            'Tesisatçı',
            'Boya Ustası',
            'Marangoz',
            'Çilingir',
            'Kombi & Klima Servisi',
            'Beyaz Eşya Servisi',
            'Fayans Ustası',
            'Çatı Ustası',
        ];

        $data = [];

        foreach ($cities as $city) {
            foreach ($services as $service) {

                $title = "{$city} {$service}";

                $description = "{$city}'de {$service} hizmeti arıyorsan bunu MyWerker mobil uygulamasından arayıp anında bulabilirsin.";

                $data[] = [
                    'city' => Str::slug($city),
                    'service' => $service,
                    'title' => $title,
                    'description' => $description,
                    'slug' => Str::slug($title),
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
        }

        DB::table('services')->truncate(); // tekrar seed için
        DB::table('services')->insert($data);
    }
}