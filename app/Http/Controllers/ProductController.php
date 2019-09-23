<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product as product;

class ProductController extends Controller
{
    public function __construct( Product $product )
    {
        $this->product = $product;
    }

    public function view_products(Request $request ,Product $product )
    {
       
        if( $request->isMethod('post') )
        {
            $new_data = [];
            $new_data['name'] = $request->input('name');
            $new_data['description'] = $request->input('description');
            $result=$product->insert( $new_data);
            if($result)
            {
                return redirect('products');
            }
        }
        else
        {
            $data=[];
            $data['products']= $this->product::all();
    
            return view('products/view_products', $data);
        }
        
    } 
   

}

