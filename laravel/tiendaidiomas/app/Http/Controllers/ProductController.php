<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Product;

class ProductController extends Controller
{
    public function __construct(Request $request)
    {
            $this->middleware(function ($request, $next) {
               $this->value = session()->get( 'lang' );

                return $next($request);
        });

    }

    public function index(Request $request)
    {
        // echo 'variable de sesión de lang es:' . $value;
        // $value = $request->session()->get('lang');
        $products = DB::table('langs')->where('langs.lang', ''.$this->value.'')
            ->leftJoin('product_langs', 'product_langs.id_lang', '=', 'langs.id_lang')
            ->leftJoin('products', 'product_langs.id_product', '=', 'products.id_product')
            ->get();
      
        foreach ($products as $prod) {
				$prod->image = substr($prod->image, 44);
		}

        return view('home')->with('products', $products);

    }


    public function find($id)
    {
           $product = DB::table('langs')->where('langs.lang', ''.$this->value.'')
            ->leftJoin('product_langs', 'product_langs.id_lang', '=', 'langs.id_lang')
            ->leftJoin('products', 'products.id_product', '=', 'product_langs.id_product')->where('products.id_product', ''.$id.'')
             ->get();

    // echo '<pre>';print_r($product);  echo'</pre>';           
        foreach ($product as $prod) {
                $prod->image = substr($prod->image, 44);
        }

        return view('product')->with('product', $product);   
    }
}
