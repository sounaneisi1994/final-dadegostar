<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

//use Illuminate\View\View;

class MainController extends Controller
{
    //
    public function index()
    {
       return view('search');
    }

    public function search(Request $request)
    {

        $fullstring = 'this is my [tag]dog[/tag]';

        $url = "https://www.digikala.com/product/".$request->product;

        try {
            $html = file_get_contents($url);

        } catch (\Exception $e) {
            return $e->getMessage();
        }

        $name = $this->get_string_between($html, '<h1 class="c-product__title">', '</h1>');
        $price = $this->get_string_between($html, '<div class="c-product__seller-price-pure js-price-value">', '</div>');
        $image = $this->get_string_between($html, '<div class="thumb-wrapper"><img data-src="', '?');


//        $htmlWithImage = str_replace('data-src', 'src', $html);
//        $htmlWithSrc = str_replace('href="', 'href="https://www.digikala.com', $htmlWithImage);
//        echo str_replace('data-src', 'src', $htmlWithSrc);



        return view('product',
            [
              'name' => $name,
              'price' => $price,
              'image' => $image,
            ]
        );
    }
    public function get_string_between($string, $start, $end){
        $string = ' ' . $string;
        $ini = strpos($string, $start);
        if ($ini == 0) return '';
        $ini += strlen($start);
        $len = strpos($string, $end, $ini) - $ini;
        return substr($string, $ini, $len);
    }

    public function cleanString($parsed)
    {
        return preg_replace('/[ \t]+/', ' ', preg_replace('/[\r\n]+/', "\n",
            preg_replace('/[\n]+/', "", $parsed)));
    }


}
