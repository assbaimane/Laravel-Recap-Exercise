<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'description' => 'If you need the greatest collection of HTML templates for your business, please visit <a rel="nofollow" href="https://www.toocss.com/" target="_blank">TooCSS</a> Blog. If you need to have a contact form PHP script, go to <a href="https://templatemo.com/contact" target="_parent">our contact page</a> for more information.',
            'img' => 'heading-line-dec.png',
            'cardicon' => 'service-icon-01.png',
            'cardtitle' => 'App Maintenance',
            'carddescription' => 'You are not allowed to redistribute this template ZIP file on any other website.',
            'cardbtn' => 'Read More',
        ]);
        DB::table('services')->insert([
            'description' => '',
            'img' => '',

            'cardicon' => 'service-icon-02.png',
            'cardtitle' => 'Rocket Speed of App',
            'carddescription' => 'You are allowed to use the Chain App Dev HTML template. Feel free to modify or edit this layout.',
            'cardbtn' => 'Read More',
        ]);
        DB::table('services')->insert([
            'description' => '',
            'img' => '',

            'cardicon' => 'service-icon-03.png',
            'cardtitle' => 'Multi Workflow Idea',
            'carddescription' => 'If this template is beneficial for your work, please support us a little via PayPal. Thank you.',
            'cardbtn' => 'Read More',
        ]);
        DB::table('services')->insert([
            'description' => '',
            'img' => '',

            'cardicon' => 'service-icon-04.png',
            'cardtitle' => '24/7 Help & Support',
            'carddescription' => 'Lorem ipsum dolor consectetur adipiscing elit sedder williamsburg photo booth quinoa and fashion axe.',
            'cardbtn' => 'Read More',
        ]);
    }
}
