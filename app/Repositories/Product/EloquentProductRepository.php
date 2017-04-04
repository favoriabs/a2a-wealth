<?php

namespace App\Repositories\Product;
use App\Repositories\Product\ProductContract;
use App\Product;
use Sentinel;


class EloquentProductRepository implements ProductContract
{
   public function create($request){
       $product = new Product;
       $this->setProductProperties($request, $product);
       $product->save();
       return $product;
   }
    
   public function findAll() {
    	return Product::all();
    }
    
    public function findById($productId) {
    	return Product::find($productId);
    }
    
    public function discard($productId) {
    	$products= $this->findById($productId);
        return $products->delete();
    }
    
    private function setProductProperties($product, $request){
        $product->product_name = $request->product_name;
        $product->variety = $request->variety;
        $product->quantity = $request->quantity;
        $product->quality = $request->quality;
        $product->shelf_life = $request->shelf_life;
        $product->price = $request->price;
        $product->fertilization = $request->fertilization;
        $product->production = $request->production;
        $user = Sentinel::getUser();

        $product->farmer_id = $user->id;
    }
}
