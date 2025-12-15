<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('books')->insert([
            'cover_image' => '/storage/cover_images/jJwOynGSHaOv5s4eKJhHX94EMOUCYTRvpdsnvq5C.jpg',
            'title' => 'Алиса в Стране Чудес',
            'ISBN' => '978-5-17-111415-2',
            'id_age_limit' => 2,
            'id_book_types' => 3,
            'pages' => '144',
            'size' => null,
            'book_cover' => null,
            'copies' => null,
            'weight' => null,
            'filesize' => 3,
            'file_format' => 'EPUB',
            'price' => 550,
            'e_book_link' => null,
            'summary' => 'Одна из самых загадочных и влиятельных книг в истории литературы, стоящая у истоков современного фэнтези и сюрреализма. Девочка Алиса, провалившись в кроличью нору, попадает в абсурдный и парадоксальный мир, где логике и здравому смыслу нет места. Её ждут встречи с говорящим Белым Кроликом, улыбкой Чеширского Кота, безумным Шляпником и жестокой Червонной Королевой. Под маской детской сказки скрывается сложная игра смыслов, пародия на викторианскую Англию, математические и философские головоломки. Это история о взрослении, гибкости ума и смелости следовать за любопытством в самый невероятный кроличий мир.',
        ]);
    }
}
