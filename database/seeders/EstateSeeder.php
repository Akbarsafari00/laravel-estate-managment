<?php

namespace Database\Seeders;

use App\Models\EstateDocumentType;
use App\Models\EstateFeatures;
use App\Models\EstateSubscription;
use App\Models\EstateType;
use App\Models\User;
use App\Models\UserInfo;
use Faker\Generator;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class EstateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Generator $faker)
    {

        $v=new EstateType();

        EstateType::create([
            'title' => 'مسکونی',
            'slug' => 'مسکونی',
            'description'=>'ملک هایی که نوع آن مسکونی است',
            'editable' => false
        ]);

        EstateType::create([
            'title' => 'تجاری',
            'slug' => 'تجاری',
            'description'=>'ملک هایی که نوع آن تجاری است',
            'editable' => false
        ]);
        EstateType::create([
            'title' => 'اداری',
            'slug' => 'اداری',
            'description'=>'ملک هایی که نوع آن اداری است',
            'editable' => false
        ]);
        EstateType::create([
            'title' => 'زمین',
            'slug' => 'زمین',
            'description'=>'ملک هایی که نوع آن زمین است',
            'editable' => false
        ]);
        EstateType::create([
            'title' => 'مغازه',
            'slug' => 'مغازه',
            'description'=>'ملک هایی که نوع آن مغازه است',
            'editable' => false
        ]);


        EstateDocumentType::create([
            'title' => 'شش دانگ',
            'slug' => 'شش-دانگ',
            'description'=>'ملک هایی که سند آن شش دانگ است',
            'editable' => false
        ]);
        EstateDocumentType::create([
            'title' => 'منگوله دار',
            'slug' => 'منگوله-دار',
            'description'=>'ملک هایی که سند آن منگوله دار است',
            'editable' => false
        ]);
        EstateDocumentType::create([
            'title' => 'تک برگ',
            'slug' => 'تک-برگ',
            'description'=>'ملک هایی که سند آن تک برگ است',
            'editable' => false
        ]);
        EstateDocumentType::create([
            'title' => 'مشاع',
            'slug' => 'مشاع',
            'description'=>'ملک هایی که سند آن مشاع است',
            'editable' => false
        ]);
        EstateDocumentType::create([
            'title' => 'رهن',
            'slug' => 'رهن',
            'description'=>'ملک هایی که سند آن ها رهن است',
            'editable' => false
        ]);


        EstateSubscription::create([
            'title' => 'برق',
            'slug' => 'برق',
            'description'=>'ملک هایی که اشتراک برق دارند',
            'editable' => false
        ]);
        EstateSubscription::create([
            'title' => 'گاز',
            'slug' => 'گاز',
            'description'=>'ملک هایی که اشتراک گاز دارند',
            'editable' => false
        ]);
        EstateSubscription::create([
            'title' => 'آب',
            'slug' => 'آب',
            'description'=>'ملک هایی که اشتراک آب دارند',
            'editable' => false
        ]);
        EstateFeatures::create([
            'title' => 'پارکینگ',
            'slug' => 'پارکینگ',
            'description'=>'ملک هایی که پارکینگ دارند',
            'editable' => false
        ]);
        EstateFeatures::create([
            'title' => 'بالکن',
            'slug' => 'بالکن',
            'description'=>'ملک هایی که بالکن دارند',
            'editable' => false
        ]);
        EstateFeatures::create([
            'title' => 'آسانسور',
            'slug' => 'آسانسور',
            'description'=>'ملک هایی که آسانسور دارند',
            'editable' => false
        ]);
        EstateFeatures::create([
            'title' => 'راه پله اضطراری',
            'slug' => 'راه-پله-اضطراری',
            'description'=>'ملک هایی که راه پله اضطراری دارند',
            'editable' => false
        ]);
    }
}
