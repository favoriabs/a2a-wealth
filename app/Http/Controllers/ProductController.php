<?php

namespace App\Http\Controllers;
use App\Repositories\Product\ProductContract;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $repo;
    public function __construct(ProductContract $productContract){
        $this->repo = $productContract;
    }
    
    public function create(){
        return view('farmer.products.create');
    }
    
    public function store(Request $request){
        $this->validate($request, [
            'product_name' => 'required',
            'variety' => 'required',
            'quantity' => 'required|numeric',
            'quality' => 'required',
            'shelf_life' => 'required',
            'price' => 'required|numeric',
            'fertilization' => 'required',
            'production' => 'required',
        ]);
        $product = $this->repo->create($request);
				if ($product->id) {
					return redirect()->back()
						->with('success', 'Product successfully Created');
				} else {
					return back()
						->withInput()
						->with('error', 'Could not add Product. Try again!');
				}
    }
}
