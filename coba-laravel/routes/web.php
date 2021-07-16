<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Home',[
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
    "title" => "About",
    "nama" => "Aditya Muhammad Nurfauzi",
    "email" => "aditya.nurfauzi09@gmail.com",
    "image" => "adit.jpg"
    ]);
}); 



Route::get('/blog', function () {
    $blog_posts = [
        [
        "title" => "Judul Post Pertama",
        "slug" => "Judul-post-pertama",
        "author" => "Aditya M Nurfauzi",
        "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magni laborum doloribus illum iure minima quam, odio corrupti cum fugit quo hic facere magnam amet vitae odit impedit consectetur eum iusto.Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa enim nesciunt beatae dolorum voluptates ex eos, maxime officia, vel esse nihil sit provident porro eius. Sed quis nulla earum quidem quaerat perspiciatis ut iste. Magnam ipsam a eveniet iusto. Quos asperiores sint aspernatur eaque, eius temporibus cupiditate? Repellat quas minima, soluta labore natus, est itaque esse aperiam pariatur doloribus non ad placeat beatae qui mollitia atque ipsam veniam et saepe, quae doloremque delectus odio impedit excepturi! Perspiciatis suscipit aspernatur aliquid odio voluptate rerum praesentium consequuntur assumenda perferendis delectus, necessitatibus voluptates, quo culpa iusto iste voluptatibus inventore ullam fugit mollitia. Debitis!"
        ],
        [
            "title" => "Judul Post kedua",
            "slug" => "Judul-post-kedua",
            "author" => "Ucup",
            "body" => "Lorem, ipsusectetur adipisicing elit. Magni laborum doloribus illum iure minima quam, odio corrupti cum fugit quo hic facere magnam amet vitae odit impedit consectetur eum iusto.Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab modi voluptate similique iste. Sed rem est distinctio ipsum explicabo totam minus temporibus dolor laborum. Cumque, voluptas? Ullam tempore, voluptatem voluptatibus exercitationem asperiores incidunt. Quae, fugiat nihil veritatis tempore exercitationem perspiciatis sapiente impedit ad asperiores laboriosam cum rem, quibusdam libero officia."
        ]
    ];

    return view('posts',[
        "title" => "Blog",
        "posts" => $blog_posts
    ]);
});


//halaman single 
Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
        [
        "title" => "Judul Post Pertama",
        "slug" => "Judul-post-pertama",
        "author" => "Aditya M Nurfauzi",
        "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magni laborum doloribus illum iure minima quam, odio corrupti cum fugit quo hic facere magnam amet vitae odit impedit consectetur eum iusto.Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa enim nesciunt beatae dolorum voluptates ex eos, maxime officia, vel esse nihil sit provident porro eius. Sed quis nulla earum quidem quaerat perspiciatis ut iste. Magnam ipsam a eveniet iusto. Quos asperiores sint aspernatur eaque, eius temporibus cupiditate? Repellat quas minima, soluta labore natus, est itaque esse aperiam pariatur doloribus non ad placeat beatae qui mollitia atque ipsam veniam et saepe, quae doloremque delectus odio impedit excepturi! Perspiciatis suscipit aspernatur aliquid odio voluptate rerum praesentium consequuntur assumenda perferendis delectus, necessitatibus voluptates, quo culpa iusto iste voluptatibus inventore ullam fugit mollitia. Debitis!"
        ],
        [
            "title" => "Judul Post kedua",
            "slug" => "Judul-post-kedua",
            "author" => "Ucup",
            "body" => "Lorem, ipsusectetur adipisicing elit. Magni laborum doloribus illum iure minima quam, odio corrupti cum fugit quo hic facere magnam amet vitae odit impedit consectetur eum iusto.Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab modi voluptate similique iste. Sed rem est distinctio ipsum explicabo totam minus temporibus dolor laborum. Cumque, voluptas? Ullam tempore, voluptatem voluptatibus exercitationem asperiores incidunt. Quae, fugiat nihil veritatis tempore exercitationem perspiciatis sapiente impedit ad asperiores laboriosam cum rem, quibusdam libero officia."
        ]
    ];

    $new_post = [];
    foreach($blog_posts as $post){
        if($post["slug"] === $slug){
            $new_post = $post;
        }
    }
    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
