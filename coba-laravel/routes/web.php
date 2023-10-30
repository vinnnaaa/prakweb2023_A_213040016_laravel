<?php

use Faker\Provider\Lorem;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
    ]);
});

Route::get('/', function () {
    return view('about', [
        "title" =>"About",
        "name" => "Revina Bella Trisna",
        "email" => "bellarevina23@gmail.com",
        "image" => "vina.jpg"

    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
        "title" => "Judul Post Pertama",
        "slug" => "judul post pertama",
        "Author" => "Widya Dwi Indrianti",
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
        "title" => "Judul Post Kedua",
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
    return  view('posts', 
    [ 
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

//halaman single post
Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
        [
        "title" => "Judul Post Pertama",
        "slug" => "judul post pertama",
        "Author" => "Revina bella Trisna",
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
        "title" => "Judul Post Kedua",
        "slug" => "judul post kedua",
        "Author" => "Adi Fadilah",
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

    $new_post =[];
    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
}); 

