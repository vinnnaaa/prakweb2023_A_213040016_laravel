<?php

namespace App\Models;

class Post 
{
    private static $blog_posts =[
    [
        "title" => "Judul Tulisan Pertama",
        "slug" => "judul post pertama",
        "Author" => "Revina Bella Trisna",
        "body" => "Lorem ipsum dolor sit, 
        amet consectetur adipisicing elit. 
        Earum debitis iure at perferendis labore qui, 
        voluptas reiciendis alias dolore, ad corrupti quidem impedit? 
        Officiis animi repellat reprehenderit, praesentium delectus ratione. 
        Delectus necessitatibus temporibus voluptate tenetur, 
        non consequatur reprehenderit enim provident error maxime ipsam aperiam id distinctio blanditiis,
         ex quia? Qui soluta nulla corrupti, dignissimos vitae dolorum in laborum autem id ad, ullam maiores! 
         Numquam corporis laboriosam esse ut cumque id voluptate ab atque dolore, 
         quo ullam sequi qui expedita autem.
        "
    ],
    [
        "title" => "Judul Tulisan Kedua",
        "slug" => "judul post kedua",
        "Author" => "Ran Takahashi",
        "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat illum sit blanditiis possimus,
         quas debitis! Veritatis tempora, fugit magni, ex est animi impedit quibusdam rem placeat, deserunt saepe exercitationem ut.
          Atque facere dolore, aperiam, accusantium laboriosam aut optio, 
          alias magnam velit vitae quia suscipit doloribus culpa nemo est sunt nostrum ipsa animi natus repellendus
          voluptate iure consequuntur earum quos. 
          Iste eaque voluptatum libero suscipit maiores odio, 
          fuga nemo debitis maxime deserunt possimus corrupti at quae ratione error dolorum excepturi ducimus sed aliquam quam. 
          Laboriosam eum labore nisi, unde,adipisci cum ullam tenetur quas necessitatibus, 
          accusantium distinctio doloremque soluta porro ratione.
        "
    ],
];

public static function all() 
{
    return collect(self::$blog_posts);
}

public static function find ($slug) 
{
    $posts = static::all();
    return $posts->firstWhere('slug', $slug);
}
}