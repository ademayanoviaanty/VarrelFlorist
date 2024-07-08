<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $content = [
            [
                'content' => 'Varrel Florist',
                'type' => 'Judul',
            ],
            [
                'content' => 'Kami adalah tim yang terdiri dari para ahli dan sudah berpengalaman dalam industri rangkaian bunga selama lebih dari 10 tahun. Varrel Florist memiliki spesialiasi di bidang desain dan dekorasi bunga untuk berbagai momen dan acara.',
                'type' => 'Tentang',
            ],
            [
                'content' => 'varrelflorist',
                'type' => 'Instagram',
            ],
            [
                'content' => 'Varrel Florist',
                'type' => 'Facebook',
            ],
            [
                'content' => 'Jl. Ciwastra',
                'type' => 'Alamat',
            ],
            [
                'content' => 'Senin - Minggu',
                'type' => 'Jam Operasional',
            ],
            [
                'content' => 'bbbbb@gmail.com',
                'type' => 'Email',
            ],
            [
                'content' => '098765',
                'type' => 'Telepon',
            ],

        ];

        DB::table('contents')->insert($content);

    }
}
