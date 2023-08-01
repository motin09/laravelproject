<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Auth\User;

class frontController extends Controller
{
   public function Home()
   {
    $users = User::all();

    return view('Home',['page_name' =>'Home page',
    'name' =>'Laravel 9 course learn',
    'users' => $users
     ]);
   }
   public function about()
    {
        return view('about',['page_name' =>'About page',
        ]);
    }
   public function Contact()
    {
        $page_name = "Contact Page";
        $product_count = 10;
        $color = "";

        $products = [];
        $products=[
           1 => [
            'name' => 'Bag',
            'color' => 'Red',
            'price' => '1200',
           ],
           2 => [
            'name' => 'Sunglass',
            'color' => 'Black',
            'price' => '550',
           ],
           3 => [
            'name' => 'BodySpray',
            'color' => 'Blue',
            'price' => '850',
           ],
        ];
        $product_count = count($products);

        return view('contact', compact(
            'page_name',
            'product_count',
            'products'
        ));

    }
   public function service()
    {
        $services=[
            'Web Desgin',
            'web Development',
            'App Development',
            'Graphics desgin',
        ];
        return view('service',compact('services'));

    }


}
