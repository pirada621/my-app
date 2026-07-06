<?php

use Illuminate\Support\Facades\Route;

Route::get('/',function () {
    return view("index");
})->name('index');

Route::get('/about',function () {
    return view("about");
});

Route::get('/blog',function () {
    return view("blog");
});
Route::get('/abouts',function () {
    $name = "Pirada";
    $date = "6 กรกฏาคม 2569";
    return view("abouts",compact("name","date"));
})->name('abouts');

Route::get('/blogs',function () {
    $blogs = [
        ['title'=> 'บทความที่ 1','content'=>'เนื้อหาบทความที่ 1',
         'content'=>'เนื้อหาบทความที่ 1',
         'status'=>true
        ],
        [
         'title'=> 'บทความที่ 2',
         'content'=>'เนื้อหาบทความที่ 2',
         'status'=>true 
        ],
        [
        'title'=> 'บทความที่ 3',
         'content'=>'เนื้อหาบทความที่ 3',
         'status'=>false     
        ]
    ];
    return view("blogs",compact("blogs"));
})->name('blogs'); 

Route::get('/workshop',function () {
    return view("workshop");
});


